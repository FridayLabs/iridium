process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function (mix) {
    mix.browserify('app.js');
    mix.browserify('welcome.js');
    var node_modules = '../../../node_modules/';
    mix.sass([
        'app.scss'
    ], 'public/css/app.css');
    mix.sass([
        'welcome.scss'
    ], 'public/css/welcome.css');
});