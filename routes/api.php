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


Route::get('supervisors', function(){
    return response(Supervisor::all(),200);
});

Route::get('supervisors/{supervisor}', function($supervisorId){
    return response(Supervisor::find($supervisorId),200);
});

Route::get('supervisors', function(Request $request){
    $resp = Supervisor::create($request->all());
    return $resp;
});

Route::put('supervisors/{supervisor}', function(Request $request, $supervisorId) {
    $supervisor = Supervisor::findOrFail($supervisorId);
    $supervisor->update($request->all());
    return $supervisor;
});

Route::delete('supervisors/{supervisor}',function($supervisorId) {
    Supervisor::find($supervisorId)->delete();
 
    return 204;
});