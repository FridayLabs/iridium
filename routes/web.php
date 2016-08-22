<?php

Route::get('/', function () {
    if (auth()->guest()) {
        return view('welcome');
    }
    return view('app');
});

Route::post('get-in', 'Auth\AuthController@getIn');
Route::get('get-in/{token}', 'Auth\AuthController@getInViaToken');

Route::get('/get-in/social/{provider}', 'Auth\AuthController@getInViaSocial');
Route::get('/get-in/social/callback/{provider}', 'Auth\AuthController@getInViaSocialCallback');

Route::get('get-out', 'Auth\AuthController@getOut');