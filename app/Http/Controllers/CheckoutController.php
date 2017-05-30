<?php
	
	namespace App\Http\Controllers;
	
	use App\booking;
	use App\booking_detail;
	use App\Contact;
	use App\Mail\Booking_New;
	use App\Mail\UserNew;
	use App\payment;
	use App\User;
	use Carbon\Carbon;
	use Cart;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Mail;
	use Illuminate\Support\Facades\Session;
	use Stripe\Charge;
	use Stripe\Error\Card;
	use Stripe\Stripe;
	
	class CheckoutController extends Controller {
		public function __construct() {
			
		}
		
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		
		
		public function index() {
			//
			if ( ! Auth::guest() ) {
				$contacts[ 'adult' ] = Contact::where( 'user_id', Auth::user()->id )
				                              ->whereType( 0 )
				                              ->get()
				                              ->toArray();
				
				if ( count( $contacts[ 'adult' ] ) == 0 ) {
					$contacts[ 'adult' ] = null;
				}
				$contacts[ 'child' ] = Contact::where( 'user_id', Auth::user()->id )
				                              ->whereType( 1 )
				                              ->get()
				                              ->toArray();
				if ( count( $contacts[ 'child' ] ) == 0 ) {
					$contacts[ 'child' ] = null;
				}
				$contacts[ 'infant' ] = Contact::where( 'user_id', Auth::user()->id )
				                               ->whereType( 2 )
				                               ->get()
				                               ->toArray();
				if ( count( $contacts[ 'infant' ] ) == 0 ) {
					$contacts[ 'infant' ] = null;
				}
			} else {
				$contacts[ 'adult' ] = null;
				$contacts[ 'child' ] = null;
				$contacts[ 'infant' ] = null;
			}
			
			
			return view( 'app.checkout', compact( 'contacts' ) );
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
			//
			
			//si el usuario agrega una nota redirige al checkout de lo contrario sigue al proceso de pago
			if ( array_has( $request, 'note' ) ) {
				Session::put( 'note', $request->note );
				
				return redirect( 'checkout' );
			}
			
			//Si el usuario no esta logueado creamos uno con los datos y lo logueamos
			if ( Auth::guest() ) {
				//verificamos si el correo existe como usuario, si no lo creamos
				$user = User::whereEmail( $request->adult[ 'email' ][ 0 ] )
				            ->first();
				if ( ! isset( $user->email ) ) {
					$user = User::create( [
						'name'     => $request->adult[ 'full_name' ][ 0 ],
						'email'    => $request->adult[ 'email' ][ 0 ],
						'password' => bcrypt($password = str_random( 8 ) )
					] );
					
					//asignamos el role de usuario
					$user->attachRole( 2 );
					
					//TODO enviar correo con la contraseña $password
					Mail::to($user->email)->send(new UserNew($user,$password));
				}
				
				//logueamos en sistema al usuario
				Auth::loginUsingId( $user->id );
			}


			
			//creamos la reserva
			$booking = booking::create( [
				'user_id' => Auth::user()->id,
				'price'   => Cart::getTotal(),
				'note'    => Session::get( 'note' ),
			] );
			
			
			//añadimos la informacion al booking detail
			foreach ( Cart::getContent() as $item ) {
				//verificamos si el tipo de producto es vuelo o producto, 3 para vuelo, el resto para los (paquetes, actividades y hoteles)
				booking_detail::create( [
					
					//Si el type del producto es vuelo (3) se debe descontar 2000
					'product_id' => $item->attributes->type <> 3 ? $item->id : $item->id - 2000,
					'type'       => $item->attributes->type,
					'name'       => $item->name,
					'price'      => $item->price,
					'quantity'   => $item->quantity,
					'checkin'    => Carbon::parse($item->attributes->checkin),
					'nights'     => ( ( $item->attributes->nights <> null ) ? $item->attributes->nights : 0 ),
					'bed'        => ( ( $item->attributes->bed <> null ) ? $item->attributes->bed : 0 ),
					'rooms'      => ( ( $item->attributes->rooms <> null ) ? $item->attributes->rooms : '' ),
					'booking_id' => $booking->id,
				] );
				
			}
			
			
			//creamos los contactos para adultos
			for ( $i = 0; $i < count( $request->adult[ 'full_name' ] ); $i++ ) {
				
				if ( isset( $request->adult[ 'contact_id' ][ $i ] ) ) {
					$adult = Contact::findorfail( $request->adult[ 'contact_id' ][ $i ] );
					if ( $adult->name == $request->adult[ 'full_name' ][ $i ] ) {
						$adult->email = $request->adult[ 'email' ][ $i ];
						$adult->phone = $request->adult[ 'phone' ][ $i ];
						$adult->city = $request->adult[ 'city' ][ $i ];
						$adult->country = $request->adult[ 'country' ][ $i ];
						$adult->save();
					} else {
						$adult = Contact::create( [
							'email'   => $request->adult[ 'email' ][ $i ],
							'name'    => $request->adult[ 'full_name' ][ $i ],
							'phone'   => $request->adult[ 'phone' ][ $i ],
							'city'    => $request->adult[ 'city' ][ $i ],
							'country' => $request->adult[ 'country' ][ $i ],
							'type'    => 0,
							'user_id' => Auth::user()->id,
						] );
					}
				} else {
					$adult = Contact::create( [
						'email'   => $request->adult[ 'email' ][ $i ],
						'name'    => $request->adult[ 'full_name' ][ $i ],
						'phone'   => $request->adult[ 'phone' ][ $i ],
						'city'    => $request->adult[ 'city' ][ $i ],
						'country' => $request->adult[ 'country' ][ $i ],
						'type'    => 0,
						'user_id' => Auth::user()->id,
					] );
				}
				
				$booking->contacts()
				        ->attach( $adult->id );
			}
			
			//creamos los contactos para niños
			for ( $i = 0; $i < count( $request->child[ 'full_name' ] ); $i++ ) {
				
				if ( isset( $request->child[ 'contact_id' ][ $i ] ) ) {
					$child = Contact::findorfail( $request->child[ 'contact_id' ][ $i ] );
					if ( $child->name == $request->child[ 'full_name' ][ $i ] ) {
						$child->age = $request->child[ 'age' ][ $i ];
						$child->save();
					} else {
						$child = Contact::create( [
							'name'    => $request->child[ 'full_name' ][ $i ],
							'age'     => $request->child[ 'age' ][ $i ],
							'type'    => 1,
							'user_id' => Auth::user()->id,
						] );
					}
				} else {
					$child = Contact::create( [
						'name'    => $request->child[ 'full_name' ][ $i ],
						'age'     => $request->child[ 'age' ][ $i ],
						'type'    => 1,
						'user_id' => Auth::user()->id,
					] );
				}
				
				
				$booking->contacts()
				        ->attach( $child->id );
			}
			
			//creamos los contactos para infants
			for ( $i = 0; $i < count( $request->infant[ 'full_name' ] ); $i++ ) {
				
				if ( isset( $request->infant[ 'contact_id' ][ $i ] ) ) {
					$infant = Contact::findorfail( $request->infant[ 'contact_id' ][ $i ] );
					if ( $infant->name == $request->infant[ 'full_name' ][ $i ] ) {
						$infant->age = $request->infant[ 'age' ][ $i ];
						$infant->save();
					} else {
						$infant = Contact::create( [
							'name'    => $request->infant[ 'full_name' ][ $i ],
							'age'     => $request->infant[ 'age' ][ $i ],
							'type'    => 2,
							'user_id' => Auth::user()->id,
						] );
					}
				} else {
					$infant = Contact::create( [
						'name'    => $request->infant[ 'full_name' ][ $i ],
						'age'     => $request->infant[ 'age' ][ $i ],
						'type'    => 2,
						'user_id' => Auth::user()->id,
					] );
				}
				
				$booking->contacts()
				        ->attach( $infant->id );
			}



			//aca lo del pago
			Stripe::setApiKey( 'sk_test_ZyIU6tPXTy3ZYBPO2zxZXB1k' );
            dd($request->stripeToken);
			try {
				$charge = Charge::create( [
					"amount"      => ( Cart::getTotal() * 100 ),
					"currency"    => "usd",
					"description" => "Shop in Travelongo by " . Cart::getTotal(),
					"source"      => $request->stripeToken,
					"metadata"    => [
						"order_id" => $booking->id,
						'name'     => Auth::user()->name,
						'email'    => Auth::user()->email,
					],
				] );
				
			} catch ( Card $e ) {
				
				$body = $e->getJsonBody();
				$error = $body[ 'error' ];
				$booking->status = 'declined';
				$booking->save();
				payment::create( [
					'value'      => $booking->price,
					'status'     => $booking->status,
					'stripe'     => 'error',
					'booking_id' => $booking->id
				] );
				
				return view( 'app.payment.declinade', compact( 'error' ) );
			}
			
			$booking->status = 'paid';
			$booking->save();


			//guardar el pago
			payment::create( [
				'value'      => $booking->price,
				'status'     => $booking->status,
				'stripe'     => $charge->id,
				'booking_id' => $booking->id
			] );
			
			$booking = booking::with( 'user', 'details', 'contacts', 'payments' )
			                  ->whereId( $booking->id )
			                  ->first();
			
			//enviar el correo al cliente y una notificacion al usuario
			Mail::to( Auth::user()->email )
			    ->bcc( env( 'MAIL_TO' ) )
			    ->send( new Booking_New( $booking ) );
			
			Cart::clear();
			Session::forget( 'adults' );
			Session::forget( 'children' );
			Session::forget( 'infants' );
			
			
			return view( 'app.payment.success', compact( 'booking' ) );
			
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
		}
	}
