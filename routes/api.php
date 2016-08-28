<?php

use Illuminate\Http\Request;

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/services', 'ServiceController@index');
Route::get('/services/connect/{service}', 'ServiceController@connect');
Route::get('/services/disconnect/{service}', 'ServiceController@disconnect');