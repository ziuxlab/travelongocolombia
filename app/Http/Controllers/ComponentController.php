<?php
    
    namespace App\Http\Controllers;
    
    use App\Components;
    use App\Page;
    use Illuminate\Http\Request;
    
    class ComponentController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
        }
        
        
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
            $components = Components::with('page')
                                    ->get()
            ;
            
            //dd($components);
            return view('admin.components.component_index', compact('components'));
        }
        
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
            $pages = Page::pluck('name', 'id');
            
            return view('admin.components.component_create', compact('pages'));
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
                'order_component' => 'numeric'
            ]);
            
            $component = Components::create([
                'name'            => $request->name,
                'body'            => $request->body,
                'status'          => $request->status,
                'page_id'         => $request->page_id,
                'order_component' => $request->order_component,
                'local'           => $request->local,
            ]);
            
            return redirect('admin/components');
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
            dd('aca');
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
            $component = Components::find($id);
            $pages = Page::pluck('name', 'id');
            
            return view('admin.components.component_edit', compact('component', 'pages'));
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
            $component = Components::find($id);
            
            $component->name = $request->name;
            $component->body = $request->body;
            $component->status = $request->status;
            $component->page_id = $request->page_id;
            $component->order_component = $request->order_component;
            $component->local = $request->local;
    
            $component->save();
    
            return redirect('admin/components');
    
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
