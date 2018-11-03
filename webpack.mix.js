const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css') 

   .styles ([
    'resources/sass/css/libs/blog-post.css',
    'resources/sass/css/libs/bootstrap.css',
    'resources/sass/css/libs/font-awesome.css',
    'resources/sass/css/libs/metisMenu.css',
    'resources/sass/css/libs/sb-admin-2.css'
       

   ],'.public/css/libs.css')

   .scripts([
    'resources/js/js/libs/jquery.js',
    'resources/js/js/libs/bootstrap.js',
    'resources/js/js/libs/metisMenu.js',
    'resources/js/js/sb-admin-2.js',
    'resources/js/js/libs/jquery.js',
    'resources/js/js/libs/scripts.js'

   ],'.public/js/libs.js')
