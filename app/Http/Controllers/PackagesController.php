<?php
    
    namespace App\Http\Controllers;
    
    use App\Packages;
    use App\Photos_Package;
    use Illuminate\Http\Request;
    use Intervention\Image\Facades\Image;
    
    class PackagesController extends Controller
    {
    
        public function __construct()
        {
            $this->middleware('auth')->except('show');
        }
       
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            $packages = Packages::all();
            
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
            
           
            
            $package = Packages::create([
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
                           ->save($path, 50)
                    ;
                    Photos_Package::create([
                        'package_id' => $package->id,
                        'img' => $path,
                        'order' => $key,
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
            $item = Packages::where('slug_url', $url)
                        ->firstOrFail()
                
            ;
            
            dd($item);
            
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
            $package = Packages::with('photos')->whereId($id)->first();
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
                'days'     => 'numeric|required'
            ]);
            
           
            $package = Packages::find($id)->update([
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
                         ->save($path, 50)
                    ;
                    Photos_Package::create([
                        'package_id' => $id,
                        'img' => $path,
                        'order' => $key,
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
            Packages::destroy($id);
        }
    
        public function delete_photo($id)
        {
            //
            Photos_Package::destroy($id);
        }
    
        public function update_order_photo(Request $request, $id)
        {
            //
            $photo = Photos_Package::find($id );
            $photo->order = $request->order;
            $photo->save();
            return $request->order;
        }
    }
