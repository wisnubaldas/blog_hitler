const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
mix.styles('front/css/pe-icon-7-stroke.css', 'public/css/pe-icon-7-stroke.css');
mix.js('resources/js/app.js', 'public/js')
    .extract(['vue','lodash','jquery', 'bootstrap'])