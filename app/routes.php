<?php


Route::get('/', function() {

  // $user = new User;

  // $user->username = 'NewUser';
  // $user->password = Hash::make('yahoo');

  // $user->save(); 

  // return $user;

  // User::create([
  //   'username' => 'NewUser',
  //   'password' => Hash::make('yahoo')
  // ]);


  // $user = User::find(2);

  // $user->username = 'UpdatedName';

  // $user->save();


  // $user = User::find(2);
  // $user->delete();



  //return User::all();

  return User::orderBy('username', 'asc')->take(2)->get();

});