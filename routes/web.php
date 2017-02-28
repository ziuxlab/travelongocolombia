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
    
    Route::get('/', function () {
        //return view('welcome');
        return view('proximamente');
    });
    
    Route::get('/login', function () {
        //return view('welcome');
        return redirect('admin/login');
    });
    
    
    Route::get('/home', 'HomeController@index');
    
    Route::group(['prefix' => 'admin'], function () {
    
        Auth::routes();
        Route::get('home', 'AdminController@index');
        Route::resource('users', 'UsersController');
        Route::resource('pages', 'PagesController');
        
        
    });
