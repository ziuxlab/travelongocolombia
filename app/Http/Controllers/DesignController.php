<?php
    
    namespace App\Http\Controllers;
    
    use App\city;
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
            
            $step = $request->step;
            return view('app.design.design', compact('step'));
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
                
                Cart::add([
                    'id'         => 2000,
                    'name'       => 'Flight to',
                    'price'      => $request->Total,
                    'quantity'   => 1,
                    'attributes' => [
                        'adults'   => Session::get('adults'),
                        'children' => Session::get('children'),
                        'infants'  => Session::get('infants'),
                        'type'     => 3, //Vuelo
                        'img'      => $request->Carrier
                    ]
                ]);
                
                //TODO guardar el vuelo seleccionado
                
                return redirect(str_slug(trans('cabecera.Design')) . '?step=2');
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
