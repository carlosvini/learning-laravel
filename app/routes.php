<?php


Route::get('/', function() {

  $users = DB::table('users')->where('username', '!=', 'carlos')->get();

 return $users;


});