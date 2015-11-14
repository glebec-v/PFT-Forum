var elixir = require('laravel-elixir');
//elixir.config.assetsPath = 'app/Assets'; // 'app/Assets' - путь к ассетам приложения
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
    mix.sass([
        'app.scss',
        'icons/general_foundicons.scss',
        'icons/social_foundicons.scss',
        'fonts/font-awesome.scss',
        'components/custom.scss',
        'components/my.scss'
    ]);
    mix.scripts([
        'jquery.min.js',
        'bootstrap.js',
        'default.js'
    ]);
});
