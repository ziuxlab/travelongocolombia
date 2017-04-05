<?php
    
    namespace App\Providers;
    
    use App\Config;
    use App\Page;
    use App\Product;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Support\Facades\View;
    use Illuminate\Support\ServiceProvider;
    
    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
            //
            Schema::defaultStringLength(191);
            //View::share('Config', Config::find(1));
            //View::share('menu', Page::whereMenu(1)->orderBy('menu_order')->get());
            //View::share('products', Product::with('photos')->get());
            
        }
        
        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            //
        }
    }
