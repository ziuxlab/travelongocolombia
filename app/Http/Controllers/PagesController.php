<?php
    
    namespace App\Http\Controllers;
    
    use App\Page;
    use App\User;
    use HttpOz\Roles\Models\Role;
    use Illuminate\Http\Request;
    
    class PagesController extends Controller
    {
        //
        public function __construct()
        {
            $this->middleware('auth', ['except' => ['show']]);
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
                'slug_url'   => 'required|unique:pages',
                'menu_order' => 'numeric'
            ]);
            
            
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
            $page = Page::where('slug_url',$url)->firstOrFail();
            
            return view('app.page', compact('page'));
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
            
            if (! $page->slug_url == str_slug($request->slug_url, '-')){
               
                $this->validate($request, [
                    'slug_url'   => 'required|unique:pages',
                    'menu_order' => 'numeric'
                ]);
                $page->slug_url = str_slug($request->slug_url, '-');
            }
            
            
            $page->name = $request->name;
            $page->tittle = $request->tittle;
            $page->body = $request->body;
            $page->meta_description = $request->meta_description;
            $page->keywords = $request->keywords;
            $page->status = $request->status;
            $page->menu = $request->menu;
            $page->menu_order = $request->menu_order;
            
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
