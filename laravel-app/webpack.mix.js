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

mix.js('resources/js/app.js', 'public/build/js')
    .vue() // あっても なくても上手くいくがキャッシュか？ ref: https://reffect.co.jp/laravel/laravel-vue3-react
    .postCss('resources/css/app.css', 'public/build/css', [
        //
    ])
    .version()
;
