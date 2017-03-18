<?php

namespace App\Http\Controllers;

use App\Config;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu =  Page::whereLocal(App::getLocale())->orderBy('menu_order')->get();
        
        
        $config = Config::findorfail(1);
        if ($config->status == 1){
    
            $page = Page::where('slug_url', '')->firstOrFail();
            
            return view('app.home', compact('page','menu'));
            
        }
        
        return view('proximamente');
        
        
    }
}
