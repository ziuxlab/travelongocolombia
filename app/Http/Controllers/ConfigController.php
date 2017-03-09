<?php
    
    namespace App\Http\Controllers;
    
    use App\Config;
    use Illuminate\Http\Request;
    
    class ConfigController extends Controller
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
        }
        
        /**
         * Display the specified resource.
         *
         * @param  \App\Config $config
         *
         * @return \Illuminate\Http\Response
         */
        public function show($url)
        {
            //
            $settings = Config::first();
            
            return view('admin.settings.settings_edit_html', compact('settings', 'url'));
            
            
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Config $config
         *
         * @return \Illuminate\Http\Response
         */
        public function edit(Config $config)
        {
            //
        }
        
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  \App\Config              $config
         *
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
            $config = Config::first();
            
            if ($id=='html'){
                $config->css = $request->css;
                $config->scripts_header = $request->scripts_header;
                $config->scripts_footer = $request->scripts_footer;
            }
            if ($id=='general'){
                $config->tittle = $request->scripts_footer;
                $config->meta_description = $request->meta_description;
                $config->keywords = $request->keywords;
                $config->status = $request->status;
                $config->email = $request->email;
                $config->phone = $request->phone;
                $config->address = $request->address;
            }
            if ($id=='social'){
                $config->facebook = $request->facebook;
                $config->twitter = $request->twitter;
                $config->google = $request->google;
                $config->youtube = $request->youtube;
                $config->instagram = $request->instagram;
                $config->pinterest = $request->pinterest;
            }
            
            $config->save();
            
            return redirect('admin/home');
        }
        
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Config $config
         *
         * @return \Illuminate\Http\Response
         */
        public function destroy(Config $config)
        {
            //
        }
    }
