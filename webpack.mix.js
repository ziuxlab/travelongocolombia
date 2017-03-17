const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//mix.js('resources/assets/js/app.js', 'public/js');
//mix.less('resources/assets/admin/less/main.less', 'public/admin/css'); //admin
//mix.less('resources/assets/less/main.less', 'public/css');
//mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.combine(['public/css/app.css','public/admin/css/main.css','resources/assets/admin/css/local.css'], 'public/admin/css/app-admin.css'); //admin
mix.combine(['public/css/app.css','public/css/main.css','resources/assets/css/local.css'], 'public/css/app-home.css');
mix.browserSync('localhost:8000');