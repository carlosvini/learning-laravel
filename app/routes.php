<?php


Route::get('users', 'UsersController@index');
Route::get('users/{username}', 'UsersController@show');
