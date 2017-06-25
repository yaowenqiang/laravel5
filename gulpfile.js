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
    mix.sass('app.scss').coffee();
    mix.styles([
        'vendor/normalize.css',
        'app.css'
    ],'public/output/final.css','public/css');
    mix.scripts([
        'vendor/jquery.js',
        'main.js',
        'coupon.js'
    ],'public/output/scripts.js','public/js')
    mix.phpUnit();
    mix.phpSpec();

    mix.version('public/css/all.css')

});
