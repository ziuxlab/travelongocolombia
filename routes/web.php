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
    
    /*
    |--------------------------------------------------------------------
    | Public routes
    |--------------------------------------------------------------------
    |
    | These routes are accessible to both non-authenticated users and
    | authenticated users.
    |
    */
    
    // Login-related routes ==============================================.
    Auth::routes();
    /*Route::get('/login', function () {
        //return view('welcome');
        return redirect('admin/login');
    });*/
    
    // Languaje-related routes ==========================================.
    Route::get('language/{locale}', function ($locale) {
        App::setLocale($locale);
        session(['locale' => $locale]);
        
        if ($locale == 'es') {
            return redirect('inicio');
        }
        return redirect('/');
    });
    
    // Menu-related routes ==============================================.
    Route::get('/', 'HomeController@index');
    Route::get('search', 'SearchController@index');
    Route::get('home', 'HomeController@home');
    Route::post('contact', 'HomeController@contact');
    Route::get('products/list/{type}', 'ProductController@list');
    
    // Design Plan related routes =======================================.
    Route::resource('design-your-plan', 'DesignController');
    Route::get('arma-tu-plan', 'DesignController@index');
    
    
    // Cart-related routes ==============================================.
    Route::resource('checkout', 'CheckoutController');
    Route::get('cart/clear', 'CartController@clear');
    Route::resource('cart', 'CartController', ['except' => ['clear']]);
    Route::resource('cart', 'CartController');
    
    // Pages-related routes ==============================================.
    Route::get('{pages}', 'PagesController@show');
    
    // Packages-related routes ==========================================.
    Route::get('packages/{slug}', 'ProductController@show');
    Route::get('paquetes/{slug}', 'ProductController@show');
    
    // Activities-related routes ========================================.
    Route::get('activities/{slug}', 'ActivityController@show');
    Route::get('actividades/{slug}', 'ActivityController@show');
    
    // Hotels-related routes ========================================.
    Route::get('hotels/{slug}', 'HotelController@show');
    Route::get('hoteles/{slug}', 'HotelController@show');
    
    /*
    |--------------------------------------------------------------------
    | Administrator role routes
    |--------------------------------------------------------------------
    */
    Route::group(['prefix' => 'admin'], function () {
        
        Auth::routes();
        Route::get('home', 'AdminController@index');
        Route::get('products/list/{type}', 'ProductController@listAdmin');
        
        // Users-related routes =========================================.
        Route::resource('users', 'UsersController');
    
        // Messages-related routes =========================================.
        Route::resource('messages', 'MessagesController');
    
        // Messages-related routes =========================================.
        Route::resource('booking', 'BookingController');
        
        // Pages-related routes =========================================.
        Route::resource('pages', 'PagesController');
        Route::resource('components', 'ComponentController');
        
        // Packages-related routes ======================================.
        Route::delete('packages/{id}', 'ProductController@delete_photo');
        Route::post('packages/{id}', 'ProductController@update_order_photo');
        Route::resource('packages', 'ProductController', ['except' => ['delete_photo', 'update_order_photo']]);
        
        // Activities-related routes ====================================.
        Route::delete('activities/{id}', 'ActivityController@delete_photo');
        Route::post('activities/{id}', 'ActivityController@update_order_photo');
        Route::resource('activities', 'ActivityController', ['except' => ['delete_photo', 'update_order_photo']]);
    
        // Hotels-related routes ========================================.
        Route::delete('hotels/{id}', 'HotelController@delete_photo');
        Route::post('hotels/{id}', 'HotelController@update_order_photo');
        Route::resource('hotels', 'HotelController', ['except' => ['delete_photo', 'update_order_photo']]);
    
        // Services-related routes ========================================.
        Route::delete('services/{id}', 'ServicesController@delete_photo');
        Route::post('services/{id}', 'ServicesController@update_order_photo');
        Route::resource('services', 'ServicesController', ['except' => ['delete_photo', 'update_order_photo']]);
    
        // System-related routes ========================================.
        Route::resource('settings', 'ConfigController');
        
        // Flights-related routes =======================================.
        Route::get('flights/buscar/{term}', 'FlightController@buscar');
        Route::resource('flights', 'FlightController');
        
    });

    /*
    |--------------------------------------------------------------------
    | Dashboard routes
    |--------------------------------------------------------------------
    */
          Auth::routes();
          Route::get('bookings/list-bookings/{id?}', 'DashboardController@bookingsList');
          Route::get('bookings/list-payments/{id?}', 'DashboardController@paymentsList');
          Route::get('account/dashboard', 'DashboardController@index');
          Route::get('account/edit-profile', 'DashboardController@editProfile');
          Route::post('account/store-profile', 'DashboardController@updateProfile');
          Route::get('account/change-password', 'DashboardController@changePassword');
          Route::post('account/store-password', 'DashboardController@storePassword');
          Route::get('bookings/booking-history', 'DashboardController@indexBookingHistory');
          Route::get('bookings/payments', 'DashboardController@indexPaymentHistory');
