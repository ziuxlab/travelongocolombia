<?php
    
    namespace App\Http\Controllers;
    
    use App\city;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;

    
    class FlightController extends Controller
    {
        
        public function __construct()
        {
            $this->middleware('auth')
                 ->except(['buscar', 'store'])
            ;
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
           
            //buscamos el destino con el id
            $destino = city::whereCity_code($request->destination)->first();
          
            
            //Guardamos los datos en la session
            
            Session::put('adults', $request->adults);
            Session::put('children', $request->children);
            Session::put('infants', $request->infants);
            Session::put('destination', $destino->city);
            Session::put('departure', $request->departure);
            Session::put('checkin', $request->checkin);
            Session::put('checkout', $request->checkout);
            
            
            if ($request->option == 'onlyHotel') {
                return redirect('design');
            }
            
            //$api = 'AIzaSyAZ1Nh5fI00J9-FS_Ufo2{{Nkd4L1IqL6xB4';
            $api = 'AIzaSyClRpqAUiaeS8XP5hibiaEQ9_2PGgOI2iQ';
            
            
            $this->validate($request, [
                'checkin'  => 'required|date|after:today',
                'checkout' => 'required|date'
            ]);
            
            $postData = [
                "request" => [
                    "passengers"  => [
                        "adultCount"       => $request->adults,
                        'childCount'       => $request->children,
                        'infantInLapCount' => $request->infants
                    ],
                    "solution"    => 20,
                    "saleCountry" => 'US',
                    "slice"       => [
                        [
                            "origin"      => substr($request->departure_id, 0, 3),
                            "destination" => $destino->city_code,
                            "date"        => date('Y-m-d', strtotime($request->checkin)),
                            "maxStops"    => 4
                        ],
                        [
                            "origin"      => $destino->city_code,
                            "destination" => substr($request->departure_id, 0, 3),
                            "date"        => date('Y-m-d', strtotime($request->checkout)),
                            "maxStops"    => 4
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
                        
                        'saleTotal' => floatval(substr($items['saleTotal'], 3)) + $num_usd,
                    
                    ];
                    
                }
                
                
                //en caso de necesitar mas imagenes de las aerolineas aca podemos encontrarlas
                // http://media.despegar.com/davinci/logo/airline/50x50/TA.png
                
                return view('admin.flights._list_flights', compact('itineraries'));
                
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
