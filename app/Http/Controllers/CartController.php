<?php
    
    namespace App\Http\Controllers;
    
    use App\Packages;
    use Cart;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Session;
    
    class CartController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            return view('app.cart');
            
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
            $item = Packages::findorfail($request->id);
            
            Cart::add([
                'id'         => $item->id,
                'name'       => $item->tittle,
                'price'      => ($request->adults * $item->price_adults * (1 - ($item->discount / 100))) +
                                ($request->children * $item->price_children * (1 - ($item->discount / 100))),
                'quantity'   => 1,
                'attributes' => [
                    'adults'   => $request->adults,
                    'children' => $request->children,
                    'infants' => $request->infants,
                    'type'     => $request->type,
                    'img'      => $item->photos->sortBy('order')
                                               ->first()->img
                ]
            ]);
            
            if (Session::has('adults')) {
                if (Session::get('adults') < $request->adults) {
                    Session::put('adults', $request->adults);
                }
            } else {
                Session::put('adults', $request->adults);
            }
            
            if (Session::has('children')) {
                if (Session::get('children') < $request->children) {
                    Session::put('children', $request->children);
                }
            } else {
                Session::put('children', $request->children);
            }
    
            if (Session::has('infants')) {
                if (Session::get('infants') < $request->infants) {
                    Session::put('infants', $request->infants);
                }
            } else {
                Session::put('infants', $request->infants);
            }
            
            if ($request->choice == 0) {
                return redirect('cart');
            }
            
            if ($request->choice == 1) {
                return redirect('flight');
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
            Cart::remove($id);
            
            
            return back();
        }
        
        public function clear()
        {
            Cart::clear();
            Session::put('adults', 0);
            Session::put('children', 0);
            Session::put('infants', 0);
            
            return back();
        }
    }