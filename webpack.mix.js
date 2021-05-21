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
    .sass('resources/sass/app.scss', 'public/css');
mix.js('resources/js/user-index.js', 'public/js/user-index.js');
mix.styles([
    'resources/css/share.css'
], 'public/css/share.css');
mix.copy('resources/css', 'public/css');
mix.copy('resources/images', 'public/images');
mix.copy('resources/js', 'public/js');
mix.copy('node_modules/jquery-easy-loading/dist/jquery.loading.min.js', 'public/js/jquery.loading.min.js');
mix.copy('node_modules/jquery-easy-loading/dist/jquery.loading.min.css', 'public/css/jquery.loading.min.css');
mix.copy('node_modules/axios/dist/axios.min.js', 'public/js/axios.min.js');

