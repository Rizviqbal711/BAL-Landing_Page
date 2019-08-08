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
	.js('resources/js/mobile.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/privacy.scss', 'public/css')
    .sass('resources/sass/ieo.scss', 'public/css')
    .sass('resources/sass/ieo-mobile.scss', 'public/css')
    .sass('resources/sass/slick/slick.scss', 'public/css')
    .sass('resources/sass/slick/slick-theme.scss', 'public/css')
    .sass('resources/sass/mobile.scss', 'public/css');
