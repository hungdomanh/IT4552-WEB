let mix = require('laravel-mix');
var browserSync = require('browser-sync').create();
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

mix.sass('resources/assets/sass/app.scss', 'public/css/app.css');

mix.js('resources/assets/js/app.js', 'public/js/app.js');

mix.browserSync({
    proxy:'localhost:8000'
});
