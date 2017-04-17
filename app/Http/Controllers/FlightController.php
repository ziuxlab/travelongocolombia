<?php
    
    namespace App\Http\Controllers;
    
    use Carbon\Carbon;
    use Illuminate\Http\Request;
    use OzdemirBurak\SkyScanner\Travel\Flights\LivePricing;
    
    class FlightController extends Controller
    {
        
        public function __construct()
        {
            $this->middleware('auth')->except('buscar');
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
          if($request->option == 'onlyHotel'){
              return redirect('design');
          }
            
            $api = 'AIzaSyAZ1Nh5fI00J9-FS_Ufo2{{Nkd4L1IqL6xB4';
            
            
            $this->validate($request, [
                'checkin'  => 'required|date|after:today',
                'checkout' => 'required|date'
            ]);
            
            $postData = [
                "request" => [
                    "passengers" => [
                        "adultCount"       => $request->adults,
                        'childCount'       => $request->children,
                        'infantInLapCount' => $request->infants
                    ],
                    "solution"   => 20,
                    "saleCountry"   => 'US',
                    "slice"      => [
                        [
                            "origin"      => substr($request->departure_id, 0, 3),
                            "destination" => substr($request->destination_id, 0, 3),
                            "date"        => date('Y-m-d', strtotime($request->checkin)),
                            "maxStops" => 2
                        ],
                        [
                            "origin"      => substr($request->destination_id, 0, 3),
                            "destination" => substr($request->departure_id, 0, 3),
                            "date"        => date('Y-m-d', strtotime($request->checkout)),
                            "maxStops" => 2
                        ]
                    ]
                ]
            ];
            
            $num_persons = $request->adults + $request->children + $request->infants;
            
            $num_usd = 10; // valor a agregar del valor total
            
            $url = 'https://www.googleapis.com/qpxExpress/v1/trips/search?key=' . $api;
            
            $client = new \GuzzleHttp\Client();
            
            $respuesta = $client->request('POST', $url, [
                'json' => $postData
            ]);
            
            
            $flights = json_decode($respuesta->getBody()
                                             ->getContents(), true);
            
           
            if (count($flights) > 0) {
                
                
                $flights['trips']['tripOption'] = array_slice($flights['trips']['tripOption'], 0, 4);
                
                $itineraries = collect();
                
               
                foreach ($flights['trips']['tripOption'] as $key => $items) {
                    
                    $stops_in = count($items['slice'][0]['segment']) - 1;
                    $stops_out = count($items['slice'][1]['segment']) - 1;
                    
                   
                    $itineraries[$key] = [
                        'Outbound' => [
                            'DepartureDate' => $items['slice'][0]['segment'][0]['leg'][0]['departureTime'],
                            'ArrivalDate'   => $items['slice'][0]['segment'][$stops_in]['leg'][0]['arrivalTime'],
                            'Duration'      => $items['slice'][0]['duration'],
                            'Stops'         => count($items['slice'][0]['segment']) - 1,
                            'Carrier'       => $items['slice'][0]['segment'][0]['flight']['carrier'],
                        
                        ],
                        'Inbound'  => [
                            'DepartureDate' => $items['slice'][1]['segment'][0]['leg'][0]['departureTime'],
                            'ArrivalDate'   => $items['slice'][1]['segment'][$stops_out]['leg'][0]['arrivalTime'],
                            'Duration'      => $items['slice'][1]['duration'],
                            'Stops'         => count($items['slice'][0]['segment']) - 1,
                            'Carrier'       => $items['slice'][1]['segment'][0]['flight']['carrier'],
                        ],
                        
                        'saleTotal'     =>  floatval(substr($items['saleTotal'],3)) + $num_usd,
                        
                    ];

                }
                
                
                $response = '';
                
                //en caso de necesitar mas imagenes de las aerolineas aca podemos encontrarlas
                // http://media.despegar.com/davinci/logo/airline/50x50/TA.png
                
                foreach ($itineraries as $flight) {
                    
                    
                    $response = $response . ' <div class="row" ><div class="col-sm-12 table-responsive" ><table class="table text-center" >
                                 <tr class="border" ><td style = "vertical-align: middle;" class="text-success padding-20" >
                                 <i class="fa fa-2x fa-plane" ></i ><div class="text-muted" >
                                                                               Outbound</div ></td ><td > <div class="h5 text-muted " > ' .
                                $request->departure . '</div ><div class="h4" > ' .
                                Carbon::parse($flight["Outbound"]["DepartureDate"])->format('h:i A') .
                                '</div ><div class="h5 text-muted " > ' .
                                Carbon::parse($flight["Outbound"]["DepartureDate"])->format('d-m-y') . ' </div ></td >
                                 <td style = "vertical-align: middle;" ><img height = "50px" src = "' . url('img/carriers/'.$flight["Outbound"]['Carrier'].'.png')
                                 . '" alt = "' .
                                $flight["Outbound"]['Carrier'] . '" ></td >
                                 <td ><div class="h5 text-muted " > Duration</div ><div class="h4" > ' .
                                gmdate('H:i', $flight['Outbound']['Duration'] * 60) . ' </div ><div class="h5 text-muted " >
                                                    ' . $flight['Outbound']['Stops'] . ' Stops </div ></td >
                                 <td ><div class="h5 text-muted " >
                                                 ' . $request->destination . '</div > <div class="h4" > ' .
                                Carbon::parse($flight['Outbound']['ArrivalDate'])->format('h:i A') .
                                ' </div ><div class="h5 text-muted " > ' .
                                Carbon::parse($flight['Outbound']['ArrivalDate'])->format('d-m-y') . ' </div ></td >
                                 <td class="bg-gray-light border" style = "width: 25%; vertical-align: middle" rowspan = "2" ><div class="h1 font-w700 " >
                                                                                                                                         $' .
                                $flight['saleTotal'] .
                                '</div ><div ><a target = "_blank" href = "'
                                 . '" class="btn btn-primary push-10-t" >
                                                                                    Seleccionar</a ></div ></td ></tr >
                                 <tr class="border" ><td style = "vertical-align: middle;" class="text-danger padding-20" >
                                 <i class="fa fa-2x fa-rotate-270 fa-plane" ></i ><div class="text-muted" >
                                                                                             Inbound</div ></td >
                                 <td ><div class="h5 text-muted " >
                                                 ' . $request->destination . '</div ><div class="h4" > ' .
                                Carbon::parse($flight['Inbound']['DepartureDate'])->format('h:i A') .
                                ' </div ><div class="h5 text-muted " > ' .
                                Carbon::parse($flight['Inbound']['DepartureDate'])->format('d-m-y') .
                                ' </div >  </td ><td style = "vertical-align: middle;" ><img height = "50px" src = "'  . url('img/carriers/'.$flight["Inbound"]['Carrier'].'.png')
                                . '" alt = "' .
                                $flight['Inbound']['Carrier'] .
                                '" ></td ><td ><div class="h5 text-muted " > Duration</div ><div class="h4" > ' .
                                gmdate('H:i', $flight['Inbound']['Duration'] * 60) .
                                ' </div ><div class="h5 text-muted " > ' . $flight['Inbound']['Stops'] .
                                ' Stops </div ></td ><td ><div class="h5 text-muted " > ' . $request->departure .
                                '</div ><div class="h4" > ' .
                                Carbon::parse($flight['Inbound']['ArrivalDate'])->format('h:i A') .
                                ' </div ><div class="h5 text-muted " > ' .
                                Carbon::parse($flight['Inbound']['ArrivalDate'])->format('d-m-y') .
                                ' </div > </td ></tr ></table > </div >  </div > ';
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
