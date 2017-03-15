<?php
    
    namespace App\Http\Controllers;
    
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use OzdemirBurak\SkyScanner\Travel\Flights\LivePricing;
    
    class FlightController extends Controller
    {
        
        public function __construct()
        {
            $this->middleware('auth');
        }
        
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            /* realizar consulta api a esta url http://partners.api.skyscanner.net/apiservices/
        geo/v1.0?
        apiKey=prtl6749387986743898559646983194 */
            
            return view('admin.flights.flights_search');
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }
        
        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         *
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
            $api = 'prtl6749387986743898559646983194';
            //$apiKey = 'zi818817858522553364254685816263';
            
            $this->validate($request, [
                'checkin'  => 'required|date|after:today',
                'checkout' => 'required|date'
            ]);
            
            
            $cliente = new \GuzzleHttp\Client();
            $respuesta = $cliente->request('POST', 'http://partners.api.skyscanner.net/apiservices/pricing/v1.0', [
                'form_params' => [
                    'adults'           => $request->adults,
                    'children'         => $request->children,
                    'infants'          => $request->infants,
                    'destinationplace' => $request->destination_id,
                    'originplace'      => $request->departure_id,
                    'outbounddate'     => date('Y-m-d', strtotime($request->checkin)),
                    'inbounddate'      => date('Y-m-d', strtotime($request->checkout)),
                    'apiKey'           => $api,
                    'currency'         => 'USD',
                    'locale'           => 'en-US',
                    'country'          => 'US',
                    'GroupPricing'     => 'true'
                ]
            ]);
            
            $num_persons = $request->adults + $request->children + $request->infants;
            $num_usd = 10;
            
            $url = $respuesta->getHeader('location')[0] . '?apiKey=' . $api;
            
            $client = new \GuzzleHttp\Client();
            $respuesta = $client->request('GET', $url, ['timeout' => 8]);
            
            
            $flights = json_decode($respuesta->getBody()
                                             ->getContents(), true);
            
            
            if (count($flights) > 0) {
                
                $flights = collect($flights);
                
                $flights['Itineraries'] = array_slice($flights['Itineraries'], 0, 4);
                
                $itineraries = collect();
                
                
                foreach ($flights['Itineraries'] as $key => $items) {
                    
                    
                    $key_Outbound = array_search($items['OutboundLegId'], array_column($flights['Legs'], 'Id'));
                    $key_Inbound = array_search($items['InboundLegId'], array_column($flights['Legs'], 'Id'));
                    
                    $key_carrier_Outbound = array_search($flights['Legs'][$key_Outbound]['Carriers'][0],
                        array_column($flights['Carriers'], 'Id'));
                    $key_carrier_Inbound = array_search($flights['Legs'][$key_Inbound]['Carriers'][0],
                        array_column($flights['Carriers'], 'Id'));
                    
                    $itineraries[$key] = [
                        'Outbound' => [
                            'DepartureDate' => $flights['Legs'][$key_Outbound]['Departure'],
                            'ArrivalDate'   => $flights['Legs'][$key_Outbound]['Arrival'],
                            'Duration'      => $flights['Legs'][$key_Outbound]['Duration'],
                            'Stops'         => count($flights['Legs'][$key_Outbound]['Stops']),
                            'Carrier'       => $flights['Carriers'][$key_carrier_Outbound],
                        
                        ],
                        'Inbound'  => [
                            'DepartureDate' => $flights['Legs'][$key_Inbound]['Departure'],
                            'ArrivalDate'   => $flights['Legs'][$key_Inbound]['Arrival'],
                            'Duration'      => $flights['Legs'][$key_Inbound]['Duration'],
                            'Stops'         => count($flights['Legs'][$key_Inbound]['Stops']),
                            'Carrier'       => $flights['Carriers'][$key_carrier_Inbound],
                        ],
                        
                        'PricingOptions'     => $items['PricingOptions'][0],
                        'BookingDetailsLink' => $items['BookingDetailsLink'],
                    ];
                }
                
                
                $response = '';
                
                foreach ($itineraries as $flight) {
                    $flight['PricingOptions']['Price'] = $flight['PricingOptions']['Price'] + $num_usd;
                   
                    $response = $response . '<div class="row"><div class="col-sm-12 table-responsive"><table class="table text-center">
                                 <tr class="border"><td style="vertical-align: middle;" class="text-success padding-20">
                                 <i class="fa fa-2x fa-plane"></i><div class="text-muted">Outbound</div></td><td> <div class="h5 text-muted ">' .
                                $request->departure . '</div><div class="h4">' .
                                date("H:i A", strtotime($flight["Outbound"]["DepartureDate"])) .
                                '</div><div class="h5 text-muted ">' .
                                date('d-m-Y', strtotime($flight["Outbound"]["DepartureDate"])) . '</div></td>
                                 <td style="vertical-align: middle;"><img height="50px" src="' .
                                $flight["Outbound"]['Carrier']['ImageUrl'] . '" alt="' .
                                $flight["Outbound"]['Carrier']['Name'] . '"></td>
                                 <td><div class="h5 text-muted ">Duration</div><div class="h4">' .
                                gmdate('H:i', $flight['Outbound']['Duration'] * 60) .
                                '</div><div class="h5 text-muted ">' . $flight['Outbound']['Stops'] . ' Stops</div></td>
                                 <td><div class="h5 text-muted ">' . $request->destination . '</div> <div class="h4">' .
                                date('H:i A', strtotime($flight['Outbound']['ArrivalDate'])) .
                                '</div><div class="h5 text-muted ">' .
                                date('d-m-Y', strtotime($flight['Outbound']['ArrivalDate'])) . '</div></td>
                                 <td class="bg-gray-light border" style="width: 25%; vertical-align: middle" rowspan="2"><div class="h1 font-w700 ">$' .
                                $flight['PricingOptions']['Price'] / $num_persons .
                                '*</div><div class="h5 text-muted">*Per Person</div><div><a target="_blank" href="' .
                                $flight['PricingOptions']['DeeplinkUrl'] . '" class="btn btn-primary push-10-t">Seleccionar</a></div></td></tr>
                                 <tr class="border"><td style="vertical-align: middle;" class="text-danger padding-20">
                                 <i class="fa fa-2x fa-rotate-270 fa-plane"></i><div class="text-muted">Inbound</div></td>
                                 <td><div class="h5 text-muted ">' . $request->destination . '</div><div class="h4">' .
                                date('H:i A', strtotime($flight['Inbound']['DepartureDate'])) .
                                '</div><div class="h5 text-muted ">' .
                                date('d-m-Y', strtotime($flight['Inbound']['DepartureDate'])) .
                                '</div>  </td><td style="vertical-align: middle;"><img height="50px" src="' .
                                $flight['Inbound']['Carrier']['ImageUrl'] . '" alt="' .
                                $flight['Inbound']['Carrier']['Name'] .
                                '"></td><td><div class="h5 text-muted ">Duration</div><div class="h4">' .
                                gmdate('H:i', $flight['Inbound']['Duration'] * 60) .
                                '</div><div class="h5 text-muted ">' . $flight['Inbound']['Stops'] .
                                ' Stops</div></td><td><div class="h5 text-muted ">' . $request->departure .
                                '</div><div class="h4">' . date('H:i A', strtotime($flight['Inbound']['ArrivalDate'])) .
                                '</div><div class="h5 text-muted ">' .
                                date('d-m-Y', strtotime($flight['Inbound']['ArrivalDate'])) .
                                '</div> </td></tr></table> </div>  </div>';
                }
                
                return $response;
                
            } else {
                return response('Error no se encontraron vuelos, intentelo mas tarde', 404);
            }
            
            
        }
        
        /**
         * Display the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }
        
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  int                      $id
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }
        
        /**
         * Remove the specified resource from storage.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
        }
        
        public function buscar($term)
        {
            $client = new \GuzzleHttp\Client();
            $url = "http://partners.api.skyscanner.net/apiservices/autosuggest/v1.0/US/USD/en-US/?query=" . $term .
                   "&apiKey=prtl6749387986743898559646983194";
            $response = $client->get($url);
            $respuesta = json_decode($response->getBody()
                                              ->getContents(), true);
            
            foreach ($respuesta['Places'] as $item) {
                $airports[] = [
                    'value' => $item['PlaceName'],
                    'data'  => $item['PlaceId'],
                    'pais'  => $item['CountryName']
                ];
            }
            
            return response()->json($airports);
            
        }
    }
