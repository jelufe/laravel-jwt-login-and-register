<?php

use Illuminate\Http\Request;

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::post('profile', 'UserController@getAuthenticatedUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
