let mix = require('laravel-mix');

mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
    'resources/assets/js/app.js'
], 'public/js/all.js');

mix.sass('resources/assets/sass/app.scss', 'public/css');

mix.browserSync({
    proxy: 'laravel-fundamentos.dev'
});