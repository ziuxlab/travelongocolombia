<?php
    
    namespace App\Http\Controllers;
    
    use App\Components;
    use App\Page;
    use App\User;
    use HttpOz\Roles\Models\Role;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Session;
    use Illuminate\Support\Facades\View;
    use Intervention\Image\Facades\Image;
    
    class PagesController extends Controller
    {
        //
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
            $pages = Page::all();
            
            return view('admin.pages.pages_index', compact('pages'));
            
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('admin.pages.pages_create');
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
            $this->validate($request, [
                'slug_url'   => 'unique:pages',
                'img'        => 'mimes:jpeg,jpg,png',
                'menu_order' => 'numeric'
            ]);
            
            if ($request->hasFile('img')) {
                
                $path = 'img/banner/' . str_random(10) . '.png';
                Image::make($request->file('img'))
                     ->save($path, 50)
                ;
                
            } else {
                $path = null;
            }
            
            $page = Page::create([
                'slug_url'         => str_slug($request->slug_url, '-'),
                'name'             => $request->name,
                'tittle'           => $request->tittle,
                'body'             => $request->body,
                'meta_description' => $request->meta_description,
                'keywords'         => $request->keywords,
                'status'           => $request->status,
                'menu'             => $request->menu,
                'menu_order'       => $request->menu_order,
                'local'            => $request->local,
                'img'              => $path,
                'tipo'             => $request->tipo,
            
            ]);
            
            return redirect('admin/pages');
            
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
            
            $item = Page::where('slug_url', $url)
                        ->firstOrFail()
            ;
            
            if ($item->tipo == 0) {
                return view('app.page', compact('item'));
            } else {
               
                $view = Page::extract_views($item);
                return view('app.packages', compact('item'));
            }
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
            $page = Page::find($id);
            
            return view('admin.pages.pages_edit', compact('page'));
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
            $page = Page::find($id);
            
            if ( ! $page->slug_url == str_slug($request->slug_url, '-')) {
                
                $this->validate($request, [
                    'slug_url'   => 'unique:pages',
                    'img'        => 'mimes:jpeg,jpg,png',
                    'menu_order' => 'numeric'
                ]);
                $page->slug_url = str_slug($request->slug_url, '-');
            }
            
            if ($request->hasFile('img')) {
                
                $path = 'img/banner/' . str_random(10) . '.png';
                Image::make($request->file('img'))
                     ->fit(300, 300)
                     ->save($path, 50)
                ;
                $page->img = $path;
            }
            
            
            $page->name = $request->name;
            $page->tittle = $request->tittle;
            $page->body = $request->body;
            $page->meta_description = $request->meta_description;
            $page->keywords = $request->keywords;
            $page->status = $request->status;
            $page->menu = $request->menu;
            $page->menu_order = $request->menu_order;
            $page->local = $request->local;
            $page->tipo = $request->tipo;
            
            $page->save();
            
            return redirect('admin/pages');
            
            
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
            //
            Page::find($id)
                ->delete()
            ;
            
            
        }
        
        
    }
