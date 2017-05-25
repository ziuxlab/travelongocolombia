<?php
    
    namespace App\Http\Controllers;
    
    use App\city;
    use App\Flight;
    use App\Page;
    use App\Product;
    use Carbon\Carbon;
    use Cart;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    
    class DesignController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index(Request $request)
        {
            //
            Session::put('plan', 'design');
            Session::put('step', $request->step);
            
            $item = Page::where('slug_url', str_slug(trans('cabecera.Design')))->first();
            return view('app.design.design', compact('item'));
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
            
            if ($request->step == 1) {
                
                //agrego el vuelo al carrito
                $flight = Flight::create([
                    'adults'           => Session::get('adults'),
                    'children'         => Session::get('children'),
                    'infants'          => Session::get('infants'),
                    'stops'            => $request->Stops,
                    'img_outbound'     => $request->img_outbound,
                    'img_inbound'      => $request->img_inbound,
                    'originplace'      => Session::get('departure'),
                    'destinationplace' => Session::get('destination'),
                    'salida_outbound'  => $request->Salida_Outbound,
                    'llegada_outbound' => $request->Llegada_Outbound,
                    'salida_inbound'   => $request->Salida_Inbound,
                    'llegada_inbound'  => $request->Llegada_Inbound,
                    'total'            => $request->Total,
                ]);
                
                
                Cart::add([
                    'id'         => $flight->id + 2000,
                    'name'       => 'Flight to '. Session::get('destination'),
                    'price'      => $flight->total,
                    'quantity'   => 1,
                    'attributes' => [
                        'adults'   => $flight->adults,
                        'children' => $flight->children,
                        'infants'  => $flight->infants,
                        'type'     => 3, //Vuelo
                        'img'      => $flight->img_outbound
                    ]
                ]);
                

                
                return redirect(str_slug(trans('cabecera.Design')) . '?step=2');
            }
            
            if ($request->step == 2) {
                $item = Product::findorfail($request->product_id);

                $total = 0;
                $adults = 0;
                $children = 0;
                //si es hotel deben verificar los tipos de habitaciones
                $hotel = $item;
                //$rooms será un collect para utilizar los metodos implode()
                $rooms = collect();

                foreach ( $request->rooms as $room ) {
                    $kind_room = Product::find( $request->product_id )->kindsHotel->where( 'id', $room[ 'id' ] )->first();
                    $rooms[] = $kind_room->kind_room;
                    $total = $total + ( $kind_room->pivot->price * $room[ 'adults' ] ) + ($hotel->price_children * $room[ 'children' ]);
                    $adults = $adults + $room[ 'adults' ];
                    $children = $children + $room[ 'children' ];
                    Product::find( $request->product_id )
                        ->kindsHotel()
                        ->updateExistingPivot( $room[ 'id' ],
                            [ 'quantity' => ( $kind_room->pivot->quantity - 1 ) ] );
                }

                $nights = Carbon::parse(Session::get('checkout'))->diffInDays(Carbon::parse(Session::get('checkin')));
               
                Cart::add([
                    'id'         => $item->id,
                    'name'       => $item->tittle,
                    'price'      => $total * $nights,
                    'quantity'   => 1,
                    'attributes' => [
                        'adults'   => $adults,
                        'children' => $children,
                        'infants'  => Session::get('infants'),
                        'type'     => $item->type,
                        'nights'   => $nights,
                        'bed'      => (isset($request->bed) ? $request->bed : 0),
                        'rooms'    => ( isset( $request->rooms ) ? $rooms->implode( ',' ) : '' ),
                        'img'      => $item->photos == null ? 'img/banner/about-us.jpg'  : $item->photos->sortBy( 'order' )
                                                                                                        ->first()->img
                    ]
                ]);
                
                return redirect(str_slug(trans('cabecera.Design')) . '?step=3');
            }
    
            if ($request->agregate == 1) {
        
                $item = Product::findorfail($request->product_id);
        
                Cart::add([
                    'id'         => $item->id,
                    'name'       => $item->tittle,
                    'price'      => (Session::get('adults') * $item->price_adults  * (1 - ($item->discount / 100))) +
                                    (Session::get('children') * $item->price_children  * (1 - ($item->discount / 100))),
                    'quantity'   => 1,
                    'attributes' => [
                        'adults'   => Session::get('adults'),
                        'children' => Session::get('children'),
                        'infants'  => Session::get('infants'),
                        'type'     => $item->type,
                        'img'      => $item->photos == null ? 'img/banner/about-us.jpg'  : $item->photos->sortBy( 'order' )
                                                                                                        ->first()->img
                    ]
                ]);
        
                return redirect(str_slug(trans('cabecera.Design')) . '?step=3');
            }
            
            
            
            if ($request->step == 3 ) {
                
                $item = Product::findorfail($request->product_id);
                
                Cart::add([
                    'id'         => $item->id,
                    'name'       => $item->tittle,
                    'price'      => (Session::get('adults') * $item->price_adults * (1 - ($item->discount / 100))) +
                                    (Session::get('children') * $item->price_children * (1 - ($item->discount / 100))),
                    'quantity'   => 1,
                    'attributes' => [
                        'adults'   => Session::get('adults'),
                        'children' => Session::get('children'),
                        'infants'  => Session::get('infants'),
                        'type'     => $item->type,
                        'img'      => $item->photos == null ? 'img/banner/about-us.jpg' : $item->photos->sortBy( 'order' )
                                                                                                       ->first()->img
                    ]
                ]);
                
                return redirect(str_slug(trans('cabecera.Design')) . '?step=4');
                
            }
    
            if ( $request->services_additional == 1) {
        
                $item = Product::findorfail($request->product_id);
        
                Cart::add([
                    'id'         => $item->id,
                    'name'       => $item->tittle,
                    'price'      => (Session::get('adults') * $item->price_adults * (1 - ($item->discount / 100))) +
                                    (Session::get('children') * $item->price_children * (1 - ($item->discount / 100))),
                    'quantity'   => 1,
                    'attributes' => [
                        'adults'   => Session::get('adults'),
                        'children' => Session::get('children'),
                        'infants'  => Session::get('infants'),
                        'type'     => $item->type,
                        'img'      => $item->photos == null ? 'img/banner/about-us.jpg'  : $item->photos->sortBy( 'order' )
                                                                                                        ->first()->img
                    ]
                ]);
        
                return redirect(str_slug(trans('cabecera.Design')) . '?step=4');
        
            }
    
    
            if ($request->step == 4) {
        
                $item = Product::findorfail($request->product_id);
        
                Cart::add([
                    'id'         => $item->id,
                    'name'       => $item->tittle,
                    'price'      => (Session::get('adults') * $item->price_adults * (1 - ($item->discount / 100))) +
                                    (Session::get('children') * $item->price_children * (1 - ($item->discount / 100))),
                    'quantity'   => 1,
                    'attributes' => [
                        'adults'   => Session::get('adults'),
                        'children' => Session::get('children'),
                        'infants'  => Session::get('infants'),
                        'type'     => $item->type,
                        'img'      => $item->photos == null ? 'img/banner/about-us.jpg'  : $item->photos->sortBy( 'order' )
                                                                                                        ->first()->img
                    ]
                ]);
        
                return redirect(str_slug(trans('cabecera.Design')) . '?step=5');
        
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
    }
