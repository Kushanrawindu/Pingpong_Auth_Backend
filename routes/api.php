<?php

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::get('supervisors', 'SupervisorController@index');

Route::get('supervisors/{supervisor}', 'SupervisorController@show');

Route::post('supervisors', 'SupervisorController@store');

Route::put('supervisors/{supervisor}', 'SupervisorController@update');

Route::delete('supervisors/{supervisor}', 'SupervisorController@delete');