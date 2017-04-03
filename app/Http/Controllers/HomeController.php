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
        
        
        
        $config = Config::findorfail(1);
        if ($config->status == 1){
    
            $menu =  Page::whereLocal(App::getLocale())->whereMenu(1)->orderBy('menu_order')->get();
            
            $item = Page::where('slug_url', '')->firstOrFail();
            
            return view('app.home', compact('item','menu'));
            
        }
        
        return view('proximamente');
        
        
    }

     /**
     * Shows all activities.
     * Muestra todas las actividades.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexActivities()
    {
        $menu = Page::whereLocal(App::getLocale())->orderBy('menu_order')->get();

        $config = Config::findorfail(1);
        if ($config->status == 1) {

            $item = Page::where('slug_url', 'activities')->firstOrFail();

            return view('app.activities', compact('item', 'menu'));
        }

        return view('proximamente');
    }


    /**
     * Show all packages.
     * Muestra todos los paquetes.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPackages()
    {
        $menu = Page::whereLocal(App::getLocale())->orderBy('menu_order')->get();

        $config = Config::findorfail(1);
        if ($config->status == 1) {

            $item = Page::where('slug_url', 'packages')->firstOrFail();

            return view('app.packages', compact('item', 'menu'));
        }

        return view('proximamente');
    }
}
