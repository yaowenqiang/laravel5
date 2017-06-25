var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // mix.less('app.less');
    // mix.sass('app.scss').coffee();
    // mix.styles([
    //     'vendor/normalize.css',
    //     'app.css'
    // ],'public/output/final.css','public/css');
    // mix.scripts([
    //     'vendor/jquery.js',
    //     'main.js',
    //     'coupon.js'
    // ],'public/output/scripts.js','public/js')
    // mix.phpUnit();
    // mix.phpSpec();
    //
    // mix.version('public/css/all.css')
    mix.sass('app.scss','resources/css')
    mix.styles([
        'libs/bootstrap.min.css',
        'app.css',
        'libs/select2.min.css'
    ],'public/css/all.css','resources/css')
    mix.scripts([
        'libs/jquery.min.js',
        'libs/bootstrap.min.js',
        'libs/select2.min.js'
    ],'public/js/all.js','resources/js')
});
