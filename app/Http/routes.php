<?php

Route::get('/', function () {
    if (auth()->guest()) {
        return view('welcome');
    }
    return view('app');
});
