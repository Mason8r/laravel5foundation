var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir(function(mix) {
    mix.sass('styles.scss');
});

elixir(function(mix) {
    mix.scripts([
    	'vendor/jQuery.js',
    	'vendor/fastclick.js',
    	'vendor/modernizer.js',
    	'vendor/placeholder.js',
    	'foundation.min.js',
    ],'public/js/main.js');
});
