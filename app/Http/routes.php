<?php

Route::get('/', function () {
    if (auth()->guest()) {
        return view('welcome');
    }
    return view('app');
});

Route::post('get-in', 'Auth\AuthController@getIn');
Route::get('get-in/{token}', 'Auth\AuthController@getInViaToken');
Route::get('get-out', 'Auth\AuthController@getOut');