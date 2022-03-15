<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('followers', 'FollowersController@getFollowers')->name('followers');
