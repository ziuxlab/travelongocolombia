<?php
    
    namespace App\Http\Controllers;
    
    use App\city;
    use App\Photo;
    use App\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;
    use Illuminate\Support\Facades\Input;
    use Illuminate\Support\Facades\Session;
    use Intervention\Image\Facades\Image;
    
    class ProductController extends Controller
    {
        
        public function __construct()
        {
            $this->middleware('auth')
                 ->except(['show', 'list'])
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
            $packages = Product::where('type', 0)
                               ->get()
            ;
            
            return view('admin.packages.packages_index', compact('packages'));
        }
        
        
        /**
         * List of products of the specified type.
         * Listado de los productos del tipo especificado.
         *
         * @return \Illuminate\Http\Response
         */
        public function list(Request $request, $type)
        {
            if (isset($request->feature)) {
                
                $products = Product::with('features')
                                   ->where('type', $type)
                                   ->where('local', \Lang::getLocale())
                                   ->whereHas('features', function ($query) use ($request) {
                                       $query->where('feature_id', $request->feature);
                                   })
                                   ->paginate(5)
                ;
            } elseif (isset($request->city)) {
                $products = Product::with('city')
                                   ->where('type', $type)
                                   ->where('local', \Lang::getLocale())
                                   ->where('city_id', $request->city)
                                   ->paginate(5)
                ;
            } else {
                $products = Product::where('type', $type)
                                   ->where('local', \Lang::getLocale())
                                   ->paginate(5)
                ;
            }
            
            
            
            
            $view = 'app.partials.activities-list';
            
            return view($view, compact('products'));
        }
        
        
        /**
         * List of products of the specified type for the administrative module.
         * Listado de los productos del tipo especificado para el módulo administrativo.
         *
         * @return \Illuminate\Http\Response
         */
        public function listAdmin($type)
        {
            Session::put('product_search',
                Input::has('ok') ? Input::get('search') : (Session::has('product_search') ? Session::get('product_search') : ''));
            Session::put('product_field',
                Input::has('field') ? Input::get('field') : (Session::has('product_field') ? Session::get('product_field') : 'slug_url'));
            Session::put('product_sort',
                Input::has('sort') ? Input::get('sort') : (Session::has('product_sort') ? Session::get('product_sort') : 'asc'));
            
            $products = Product::where('type', $type)
                               ->where('tittle', 'like', '%' . Session::get('product_search') . '%')
                               ->orderBy(Session::get('product_field'), Session::get('product_sort'))
                               ->paginate(5)
            ;
            
            $view = '';
            switch ($type) {
                case 0:
                    $view = 'admin.packages._list_packages';
                    break;
                case 1:
                    $view = 'admin.activities._list_activities';
                    break;
            }
            
            return view($view, compact('products'));
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
                'description'      => $request->description,
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
                                  'description'      => $request->description,
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
