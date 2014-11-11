@extends('layouts.default')

@section('content')
    <h1>All Users</h1>

    @forelse ($users as $user)
      <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>

    @empty 
      <p>Unfortunately there are no users.</p>
    @endforelse
    
@stop
