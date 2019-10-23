const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides< a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

    mix.styles([
        '/css/adminlte.css',
        '/css/adminlte.min.css',
        '/css/app.css'
    ], 'public/css/all.css');

    mix.scripts([
        '/plugins/bootstrap/js/bootstrap.bundle.min.js',
        '/plugins/chart.js/Chart.min.js',
        '/plugins/sparklines/sparkline.js',
        '/plugins/jqvmap/jquery.vmap.min.js',
        '/plugins/jqvmap/maps/jquery.vmap.world.js',
        '/plugins/jquery-knob/jquery.knob.min.js',
        '/plugins/moment/moment.min.js ',
        '/plugins/daterangepicker/daterangepicker.js',
        '/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
        '/plugins/summernote/summernote-bs4.min.js',
        '/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        '/plugins/fastclick/fastclick.js',
        '/dist/js/adminlte.js'
    ], 'public/js/all.js');
// npm run dev

