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
    
    
    Route::get('/login', function () {
        //return view('welcome');
        return redirect('admin/login');
    });
    
    Route::get('language/{locale}', function ($locale) {
        App::setLocale($locale);
        session(['locale' => $locale]);
        
        if ($locale == 'es') {
            return redirect('inicio');
        }
        
        return redirect('/');
    });
    
    
    Route::get('/', 'HomeController@index');
    Route::get('checkout/clear', 'CartController@clear');
    Route::resource('checkout','CartController', ['except'=>['clear']]);
    
    //
    Route::get('activities/{slug}', 'ActivitiesController@show');
    Route::get('packages/{slug}', 'PackagesController@show');
    Route::get('paquetes/{slug}', 'PackagesController@show');
    Route::resource('cart', 'CartController');
    
    Route::get('{pages}', 'PagesController@show');
    
    Route::group(['prefix' => 'admin'], function () {
        
        Auth::routes();
        Route::get('home', 'AdminController@index');
        Route::resource('users', 'UsersController');
        Route::resource('pages', 'PagesController');
        Route::resource('components', 'ComponentController');
        Route::delete('packages/{id}', 'PackagesController@delete_photo');
        Route::post('packages/{id}', 'PackagesController@update_order_photo');
        Route::resource('packages', 'PackagesController', ['except' => ['delete_photo','update_order_photo']]);
        Route::resource('activities', 'ActivitiesController');
        Route::resource('settings', 'ConfigController');
        
        
        Route::get('flights/buscar/{term}', 'FlightController@buscar');
        Route::resource('flights', 'FlightController');
        
    });
