const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/assets/js")
    .version()
    .sass("resources/sass/app.scss", "public/assets/css")
    .version()
    .css("resources/css/app.css", "public/assets/css").version();
mix.copy("resources/img", "public/assets/image")
    .copy("resources/books", "public/assets/books");
