const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/guestApp.js', 'public/js')
    .sass('resources/sass/guestApp.scss', 'public/css')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);