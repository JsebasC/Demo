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

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
*/

//MINIFICAR 

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/paper-kit.css',
], 'public/css/paper-kit.css')
    .options({
        processCssUrls: false
    });


mix.scripts([
    'resources/assets/js/core/jquery.min.js',
    'resources/assets/js/core/popper.min.js',
    'resources/assets/js/core/bootstrap.min.js',
    'resources/assets/js/plugins/bootstrap-switch.js',
    'resources/assets/js/plugins/nouislider.min.js',
    'resources/assets/js/plugins/moment.min.js',
    'resources/assets/js/plugins/bootstrap-datepicker.js',
    'resources/assets/js/paper-kit.js'
], 'public/js/paper-kit.js');

