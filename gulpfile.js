const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-livereload');

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

/*
elixir(mix => {
    mix.copy('node_modules/materialize-css/fonts/roboto', 'public/fonts/roboto');
    mix.sass('app.scss')
       .webpack('app.js');
});
*/
elixir(function (mix) {
    mix.styles([
        '../../../node_modules/bootstrap/dist/css/bootstrap.min.css',
        '../../../node_modules/sweetalert/dist/sweetalert.css',
        'estilo.css',
    ], 'public/css/site.css');

    mix.scripts([
        '../../../node_modules/jquery/dist/jquery.min.js',
        '../../../node_modules/bootstrap/dist/js/bootstrap.min.js',
        'fileinput.js',
        'mascara.js',
        'funcoes.js',
        '../../../node_modules/sweetalert/dist/sweetalert.min.js',
    ], 'public/js/site.js');

    mix.livereload();
    mix.version(['css/site.css', 'js/site.js']);
});
