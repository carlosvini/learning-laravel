<?php

class UsersController extends \BaseController {


	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

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

	public function create() {

		return View::make('users.create');
	}

	public function store() {
		$input = Input::all();

		if (!$this->user->fill($input)->isValid()) {
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		$this->user->save();

		return Redirect::route('users.index');
	}
	

}
