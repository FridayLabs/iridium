process.env.DISABLE_NOTIFIER = true;

const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

elixir(mix => {
    var node_modules = '../../../node_modules/';
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
    mix.webpack('app.js');
    mix.webpack('welcome.js');
    mix.sass([
        'app.scss'
    ], 'public/css/app.css');

    mix.sass([
        'welcome.scss'
    ], 'public/css/welcome.css');
});
