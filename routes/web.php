<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile',function(){
    return view('profile');
});