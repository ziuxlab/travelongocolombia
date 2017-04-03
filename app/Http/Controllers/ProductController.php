<?php
    
    namespace App\Http\Controllers;
    
    use App\Product;
    use App\Photo;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Intervention\Image\Facades\Image;
    
    class ProductController extends Controller
    {
        
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
            $packages = Product::all();
            
            return view('admin.packages.packages_index', compact('packages'));
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            return view('admin.packages.packages_create');
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
                'slug_url' => 'unique:packages',
                'days'     => 'numeric|required'
            
            ]);
            
            
            $package = Product::create([
                'tittle'           => $request->tittle,
                'slug_url'         => str_slug($request->slug_url, '-'),
                'days'             => $request->days,
                'price_adults'     => $request->price_adults,
                'price_children'   => $request->price_children,
                'discount'         => $request->discount,
                'meta_description' => $request->meta_description,
                'keywords'         => $request->keywords,
                'status'           => $request->status,
                'local'            => $request->local,
                'itinerary'        => $request->itinerary,
            ]);
            
            if ($request->hasFile('img')) {
                foreach ($request->file('img') as $key => $img) {
                    $path = 'img/packages/' . str_random(10) . '.png';
                    Image::make($img)
                        ->fit(1200, 600)
                         ->save($path, 50)
                    ;
                    Photo::create([
                        'package_id' => $package->id,
                        'img'        => $path,
                        'order'      => $key,
                    ]);
                }
            }
            
            return redirect('admin/packages');
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
            
            return view('app.packages-item', compact('item'));
            
            
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
            
            return view('admin.packages.packages_edit', compact('package'));
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
            $this->validate($request, [
                'days' => 'numeric|required'
            ]);
            
            
            $package = Product::find($id)
                               ->update([
                                   'tittle'           => $request->tittle,
                                   'slug_url'         => str_slug($request->slug_url, '-'),
                                   'days'             => $request->days,
                                   'price_adults'     => $request->price_adults,
                                   'price_children'   => $request->price_children,
                                   'discount'         => $request->discount,
                                   'meta_description' => $request->meta_description,
                                   'keywords'         => $request->keywords,
                                   'status'           => $request->status,
                                   'local'            => $request->local,
                                   'itinerary'        => $request->itinerary,
                               ])
            ;
            
            if ($request->hasFile('img')) {
                foreach ($request->file('img') as $key => $img) {
                    $path = 'img/packages/' . str_random(10) . '.png';
                    Image::make($img)
                        ->fit(1200, 600)
                         ->save($path, 50)
                    ;
                    Photo::create([
                        'package_id' => $id,
                        'img'        => $path,
                        'order'      => $key,
                    ]);
                }
            }
            
            return redirect('admin/packages');
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
        
        public function delete_photo($id)
        {
            //
            $photo = Photo::findorfail($id);
            File::delete($photo->img);
            
            $photo->delete();
        }
        
        public function update_order_photo(Request $request, $id)
        {
            //
            $photo = Photo::find($id);
            $photo->order = $request->order;
            $photo->save();
            
            return $request->order;
        }
    }
