<?php
    
    namespace App\Http\Controllers;
    
    use App\booking;
    use App\booking_detail;
    use App\Contact;
    use App\User;
    use Cart;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Session;
    use Stripe\Charge;
    use Stripe\Error\Card;
    use Stripe\Stripe;
    
    class CheckoutController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            if ( ! Auth::guest()) {
                $contacts['adult'] = Contact::where('user_id', Auth::user()->id)
                                            ->whereType(0)
                                            ->get()
                                            ->toArray()
                ;
                $contacts['child'] = Contact::where('user_id', Auth::user()->id)
                                            ->whereType(1)
                                            ->get()
                                            ->toArray()
                ;
                $contacts['infant'] = Contact::where('user_id', Auth::user()->id)
                                             ->whereType(2)
                                             ->get()
                                             ->toArray()
                ;
            } else {
                $contacts['adult'] = null;
                $contacts['child'] = null;
                $contacts['infant'] = null;
            }
            
            return view('app.checkout', compact('contacts'));
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
            
            
            if (array_has($request, 'note')) {
                Session::put('note', $request->note);
                
                return redirect('checkout');
            }
            
            
            if (Auth::guest()) {
                $user = User::create([
                    'name'     => $request->adult['full_name'][0],
                    'email'    => $request->adult['email'][0],
                    'password' => bcrypt(str_random(8))
                ]);
                
                //asignamos el role de usuario
                $user->attachRole(2);
                
                //logueamos en sistema al usuario
                Auth::loginUsingId($user->id);
            }
            
            //creamos la reserva
            $booking = booking::create([
                'user_id' => Auth::user()->id,
                'price'   => Cart::getTotal(),
            ]);
            
            //añadimos la infrmacion al booking detail
            foreach (Cart::getContent() as $item) {
                //verificamos si el tipo de producto es vuelo o producto, 3 para vuelo, el resto para los (paquetes, actividades y hoteles)
                booking_detail::create([
                    'product_id' => $item->attributes->type <> 3 ? $item->id : $item->attributes->flight_id,
                    //same ID for Flights
                    'type',
                    $item->attributes->type <> 3 ? $item->attributes->type : 3,
                    'booking_id' => $booking->id,
                ]);
            }
            
            //creamos los contactos para adultos
            for ($i = 0; $i < count($request->adult['full_name']); $i++) {
                
                if (isset($request->adult['contact_id'][$i])) {
                    $adult = Contact::findorfail($request->adult['contact_id'][$i]);
                    if ($adult->name == $request->adult['full_name'][$i]) {
                        $adult->email = $request->adult['email'][$i];
                        $adult->phone = $request->adult['phone'][$i];
                        $adult->city = $request->adult['city'][$i];
                        $adult->country = $request->adult['country'][$i];
                        $adult->save();
                    } else {
                        $adult = Contact::create([
                            'email'   => $request->adult['email'][$i],
                            'name'    => $request->adult['full_name'][$i],
                            'phone'   => $request->adult['phone'][$i],
                            'city'    => $request->adult['city'][$i],
                            'country' => $request->adult['country'][$i],
                            'type'    => 0,
                            'user_id' => Auth::user()->id,
                        ]);
                    }
                } else {
                    $adult = Contact::create([
                        'email'   => $request->adult['email'][$i],
                        'name'    => $request->adult['full_name'][$i],
                        'phone'   => $request->adult['phone'][$i],
                        'city'    => $request->adult['city'][$i],
                        'country' => $request->adult['country'][$i],
                        'type'    => 0,
                        'user_id' => Auth::user()->id,
                    ]);
                }
                
                $booking->contacts()->attach($adult->id);
            }
            
            //creamos los contactos para niños
            for ($i = 0; $i < count($request->child['full_name']); $i++) {
                
                if (isset($request->child['contact_id'][$i])) {
                    $child = Contact::findorfail($request->child['contact_id'][$i]);
                    if ($child->name == $request->child['full_name'][$i]) {
                        $child->age = $request->child['age'][$i];
                        $child->save();
                    } else {
                        $child = Contact::create([
                            'name'    => $request->child['full_name'][$i],
                            'age'     => $request->child['age'][$i],
                            'type'    => 1,
                            'user_id' => Auth::user()->id,
                        ]);
                    }
                } else {
                    $child = Contact::create([
                        'name'    => $request->child['full_name'][$i],
                        'age'     => $request->child['age'][$i],
                        'type'    => 1,
                        'user_id' => Auth::user()->id,
                    ]);
                }
                
                
                $booking->contacts()
                        ->attach($child->id)
                ;
            }
            
            //creamos los contactos para infants
            for ($i = 0; $i < count($request->infant['full_name']); $i++) {
                
                if (isset($request->infant['contact_id'][$i])) {
                    $infant = Contact::findorfail($request->infant['contact_id'][$i]);
                    if ($infant->name == $request->infant['full_name'][$i]) {
                        $infant->age = $request->infant['age'][$i];
                        $infant->save();
                    } else {
                        $infant = Contact::create([
                            'name'    => $request->infant['full_name'][$i],
                            'age'     => $request->infant['age'][$i],
                            'type'    => 2,
                            'user_id' => Auth::user()->id,
                        ]);
                    }
                } else {
                    $infant = Contact::create([
                        'name'    => $request->infant['full_name'][$i],
                        'age'     => $request->infant['age'][$i],
                        'type'    => 2,
                        'user_id' => Auth::user()->id,
                    ]);
                }
                
                
                $booking->contacts()
                        ->attach($infant->id)
                ;
            }
            
            //aca lo del pago
            Stripe::setApiKey(env('STRIPE_SECRET'));
            
            try {
                $charge = Charge::create([
                    "amount"      => (Cart::getTotal() * 100),
                    "currency"    => "usd",
                    "description" => "Shop in Travelongo by " . Cart::getTotal(),
                    "source"    => $request->stripeToken,
                    "metadata"    => [
                        "order_id" => $booking->id,
                        'name'     => Auth::user()->name,
                        'email'    => Auth::user()->email,
                    ],
                ]);
                
            } catch (Card $e) {
               
                $body = $e->getJsonBody();
                $error  = $body['error'];
                $booking->status = 'declined';
                $booking->save();
                return view('app.payment.declinade', compact('error'));
            }
            
            $booking->status = 'paid';
            $booking->save();
            Cart::clear();
            Session::forget('adults');
            Session::forget('children');
            Session::forget('infants');
            return view('app.payment.success', compact('booking'));
            
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
