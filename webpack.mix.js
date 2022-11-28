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

mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/js/jquery.datatables.min.js');
mix.copy('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/js/datatables.bootstrap4.min.js');
mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/css/datatables.bootstrap4.min.css');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();