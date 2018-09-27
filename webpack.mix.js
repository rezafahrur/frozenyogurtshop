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
   .scripts(['node_modules/datatables.net/js/jquery.dataTables.js',
            'node_modules/datatables.net-bs/js/dataTables.bootstrap.js',
            'node_modules/datatables.net-responsive/js/dataTables.responsive.js',
            'node_modules/amaranjs/dist/js/jquery.amaran.js',
            'resources/js/components/buttons-scripts.js',
            'resources/js/components/datatables-scripts.js',
            'resources/js/components/modals-scripts.js'
            ], 'public/js/admin.js')
    .scripts('resources/js/mobile.js', 'public/js/web.js')
    .styles(['node_modules/datatables.net-bs/css/dataTables.bootstrap.css',
              'node_modules/amaranjs/dist/css/amaran.min.css',
              'node_modules/amaranjs/dist/css/animate.min.css'
              ], 'public/css/admin.css')
    .styles(['resources/css/style.css',
             'resources/css/mobile.css'
              ], 'public/css/web.css')
    .copyDirectory('node_modules/bootstrap/dist/fonts', 'public/fonts')
    .copyDirectory('node_modules/tinymce', 'public/plugins/tinymce')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
    processCssUrls: false
});
