<?php
    
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */
    
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Session;
    
    
    Route::get('/login', function () {
        //return view('welcome');
        return redirect('admin/login');
    });
    
    Route::get('language/{locale}', function ($locale){
        App::setLocale($locale);
        session(['locale'=>$locale]);
        return redirect('/');
    });
    
    
    Route::get('/', 'HomeController@index');
    
    Route::get('{pages}', 'PagesController@show');
    
    Route::group(['prefix' => 'admin'], function () {
    
        Auth::routes();
        Route::get('home', 'AdminController@index');
        Route::resource('users', 'UsersController');
        Route::resource('pages', 'PagesController');
        Route::resource('components', 'ComponentController');
        Route::resource('settings', 'ConfigController');
    
    
        Route::get('flights/buscar/{term}', 'FlightController@buscar');
        Route::resource('flights', 'FlightController');
        
    });
