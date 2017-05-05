<?php
    
    namespace App\Http\Controllers;
    
    use App\Photo;
    use App\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Intervention\Image\Facades\Image;
    
    class ServicesController extends Controller
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
            $packages = Product::where('type', 4)
                               ->paginate(10)
            ;
            
            return view('admin.services.services_index', compact('packages'));
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('admin.services.services_create');
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
                'days'              => $request->days,
                'price_adults'      => $request->price_adults,
                'price_children'    => $request->price_children,
                'discount'          => $request->discount,
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
                'type'              => 4,
            ]);
    
            Product::find($activity->id)->features()->attach($request->features);
            
            if ($request->file('img')) {
                foreach ($request->file('img') as $key => $img) {
                    $path = 'img/services/' . str_random(10) . '.png';
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
            
            return redirect('admin/services');
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
            $package = Product::with('photos')
                              ->whereId($id)
                              ->first()
            ;
    
            return view('admin.services.services_edit', compact('package'));
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
                'days'              => $request->days,
                'price_adults'      => $request->price_adults,
                'price_children'    => $request->price_children,
                'discount'          => $request->discount,
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
    
            Product::find($id)->features()->sync($request->features);
    
            if ($request->file('img')) {
                foreach ($request->file('img') as $key => $img) {
                    $path = 'img/services/' . str_random(10) . '.png';
                    Image::make($img)->fit(1200, 600)->save($path, 50);
                    Photo::create([
                        'product_id' => $id,
                        'img'        => $path,
                        'order'      => $key,
                    ]);
                }
            }
    
            return redirect('admin/services');
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
