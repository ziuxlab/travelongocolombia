<?php
    
    namespace App\Http\Controllers;
    
    use App\kindsHotel;
    use App\Photo;
    use App\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Session;
    use Intervention\Image\Facades\Image;
    
    class HotelController extends Controller
    {
        
        /**
         * ActivityController constructor.
         */
        public function __construct()
        {
            $this->middleware('auth')
                 ->except('show')
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
            $packages = Product::where('type', 2)
                               ->paginate(10)
            ;
           
            
            return view('admin.hotels.hotels_index', compact('packages'));
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            $kindshotel = kindsHotel::all();
            return view('admin.hotels.hotels_create', compact('kindshotel'));
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
            $this->validate($request, [
                'slug_url' => 'unique:products',
            ]);
            
            
            $activity = Product::create([
                'tittle'            => $request->tittle,
                'slug_url'          => str_slug($request->slug_url, '-'),
                'meta_description'  => $request->meta_description,
                'keywords'          => $request->keywords,
                'status'            => $request->status,
                'local'             => $request->local,
                'itinerary'         => $request->itinerary,
                'include'           => $request->include,
                'suggestion'        => $request->suggestion,
                'description'       => $request->description,
                'short_description' => $request->short_description,
                'city_id'           => $request->city_id,
                'type'              => 2,
            ]);
    
            $kindshotel = collect($request->kindshotel);


    
            //descartamos los kindshotel que tengan cantidad 0
            foreach ($kindshotel  as $key => $item) {
                if ($item['quantity'] == 0){
                    $kindshotel->pull($key);
                }
            }


            //sincronizamos los tipos de cama con el hotel
            Product::find($activity->id)->kindsHotel()->sync($kindshotel->toArray());
    
            Product::find($activity->id)->features()->attach($request->features);
            
            if ($request->file('img')) {
                foreach ($request->file('img') as $key => $img) {
                    $path = 'img/hotels/' . str_random(10) . '.png';
                    Image::make($img)
                         ->fit(1200, 600)
                         ->save($path, 50)
                    ;
                    Photo::create([
                        'product_id' => $activity->id,
                        'img'        => $path,
                        'order'      => $key,
                    ]);
                }
            }
            
            return redirect('admin/hotels');
        }
        
        /**
         * Display the specified resource.
         *
         * @param  int $id
         *
         * @return \Illuminate\Http\Response
         */
        public function show($url)
        {
            //
            $item = Product::where('slug_url', $url)
                           ->firstOrFail()
            ;
            Session::put('url','hotel');
            
            return view('app.product-item', compact('item'));
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
            $package = Product::with('photos','kindsHotel')
                              ->whereId($id)
                              ->first()
            ;
            
    
            $kindshotel = kindsHotel::all();
    
            return view('admin.hotels.hotels_edit', compact('package','kindshotel'));
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
           
            
            Product::find($id)->update([
                'tittle'            => $request->tittle,
                'slug_url'          => str_slug($request->slug_url, '-'),
                'meta_description'  => $request->meta_description,
                'keywords'          => $request->keywords,
                'status'            => $request->status,
                'local'             => $request->local,
                'itinerary'         => $request->itinerary,
                'include'           => $request->include,
                'suggestion'        => $request->suggestion,
                'description'       => $request->description,
                'short_description' => $request->short_description,
                'city_id'           => $request->city_id,
            ]);
            
            $kindshotel = collect($request->kindshotel);
            
            //descartamos los kindshotel que tengan cantidad 0
            foreach ($kindshotel  as $key => $item) {
               
                if ($item['quantity'] == 0){
                    $kindshotel->pull($key);
                }
            }
    
            Product::find($id)->features()->sync($request->features);
            Product::find($id)->kindsHotel()->sync($kindshotel->toArray());
            
    
            if ($request->file('img')) {
                foreach ($request->file('img') as $key => $img) {
                    $path = 'img/hotels/' . str_random(10) . '.png';
                    Image::make($img)->fit(1200, 600)->save($path, 50);
                    Photo::create([
                        'product_id' => $id,
                        'img'        => $path,
                        'order'      => $key,
                    ]);
                }
            }
    
            return redirect('admin/hotels');
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
            Product::destroy($id);
        }
    }
