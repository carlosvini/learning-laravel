<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
	  $users = User::all();

	  return View::make('users.index', ['users' => $users]);
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		
	  $user = User::whereUsername($username)->first();

	 	return View::make('users.show', ['user' => $user]);
	}

	

}
