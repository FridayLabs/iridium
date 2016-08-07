process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

elixir(function (mix) {

    var node_modules = '../../../node_modules/';

    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    mix.browserify('app.js');
    mix.browserify('welcome.js');

    mix.sass([
        'app.scss'
    ], 'public/css/app.css');

    mix.sass([
        'welcome.scss'
    ], 'public/css/welcome.css');
});