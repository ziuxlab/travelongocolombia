<?php
	
	namespace App\Http\Controllers;
	
	use App\Product;
	use Cart;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\App;
	use Illuminate\Support\Facades\Session;
	
	class CartController extends Controller {



        public function __construct()
        {
             }

	    /**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function index() {
			//
			return view( 'app.cart' );
			
		}
		
		/**
		 * Show the form for creating a new resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function create() {
			//
		}
		
		/**
		 * Store a newly created resource in storage.
		 *
		 * @param  \Illuminate\Http\Request $request
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function store( Request $request ) {
			
			
			//buscamos el item por el id
			$item = Product::findorfail( $request->id );

			$total = 0;
			$adults = 0;
			$children = 0;
			//verificamos si el tipo hotel
			if ( $request->type == 2 ) {
				//si es hotel deben verificar los tipos de habitaciones
				$hotel = Product::find( $request->id );
				//$rooms será un collect para utilizar los metodos implode()
				$rooms = collect();
				
				foreach ( $request->rooms as $room ) {
					$kind_room = Product::find( $request->id )->kindsHotel->where( 'id', $room[ 'id' ] )->first();
					$rooms[] = $kind_room->kind_room;
					$total = $total + ( $kind_room->pivot->price * $room[ 'adults' ] ) + ($hotel->price_children * $room[ 'children' ]);
					$adults = $adults + $room[ 'adults' ];
					$children = $children + $room[ 'children' ];
					Product::find( $request->id )
					       ->kindsHotel()
					       ->updateExistingPivot( $room[ 'id' ],
						       [ 'quantity' => ( $kind_room->pivot->quantity - 1 ) ] );
				}

				$total = $total * $request->nights;
				
			} else {
				$total = $request->total;
			}
			
			//agregamos el prodcuto al carrito
			Cart::add( [
				'id'         => $item->id,
				'name'       => $item->tittle,
				'price'      => $total ,
				'quantity'   => 1,
				'attributes' => [
					'adults'   => $request->adults ? $request->adults : $adults,
					'children' => $request->children ? $request->children : $children,
					'infants'  => $request->infants ? $request->infants : 0,
					'type'     => $request->type,
					'nights'   => ( isset( $request->nights ) ? $request->nights : 0 ),
					'bed'      => ( isset( $request->bed ) ? $request->bed : 0 ),
					'rooms'    => ( isset( $request->rooms ) ? $rooms->implode( ',' ) : '' ),
					'img'      => $item->photos == null ? $item->photos->sortBy( 'order' )
					                                                   ->first()->img : 'img/banner/about-us.jpg'
				]
			] );
			
			
			if ( Session::has( 'adults' ) ) {
				if ( Session::get( 'adults' ) < $request->adults  ? $request->adults : $adults) {
					Session::put( 'adults', $request->adults  ? $request->adults : $adults );
				}
			} else {
				Session::put( 'adults', $request->adults  ? $request->adults : $adults);
			}
			
			if ( Session::has( 'children' ) ) {
				if ( Session::get( 'children' ) < $request->children ? $request->children : $children ) {
					Session::put( 'children', $request->children ? $request->children : $children );
				}
			} else {
				Session::put( 'children', $request->children ? $request->children : $children );
			}
			
			if ( Session::has( 'infants' ) ) {
				if ( Session::get( 'infants' ) < $request->infants ) {
					Session::put( 'infants', $request->infants );
				}
			} else {
				Session::put( 'infants', $request->infants );
			}
			
			if ( $request->choice == 0 ) {
				return redirect( 'cart' );
			}
			
			//activities
			if ( $request->choice == 1 ) {
				if ( App::isLocale( 'en' ) ) {
					//
					return redirect( 'activities' );
				} else {
					return redirect( 'actividades' );
				}
				
			}
			
			if ( $request->choice == 2 ) {
				if ( App::isLocale( 'en' ) ) {
					//
					return redirect( 'hotels' );
				} else {
					return redirect( 'hoteles' );
				}
				
			}
			
			if ( $request->choice == 3 ) {
				
				if ( App::isLocale( 'en' ) ) {
					//
					return redirect( 'flight' );
				} else {
					return redirect( 'vuelos' );
				}
			}
			
			if ( $request->choice == 4 ) {
				
				if ( App::isLocale( 'en' ) ) {
					//
					return redirect( 'packages' );
				} else {
					return redirect( 'paquetes' );
				}
			}
			
			
			return back();
			
		}
		
		/**
		 * Display the specified resource.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function show( $id ) {
			//
		}
		
		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function edit( $id ) {
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
		public function update( Request $request, $id ) {
			//
		}
		
		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int $id
		 *
		 * @return \Illuminate\Http\Response
		 */
		public function destroy( $id ) {
			//
			Cart::remove( $id );
			return back();
		}
		
		public function clear() {
			Cart::clear();
			Session::put( 'adults', 0 );
			Session::put( 'children', 0 );
			Session::put( 'infants', 0 );
			
			return back();
		}
	}
