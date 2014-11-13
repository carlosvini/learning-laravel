@extends('layouts.default')

@section('content')
    <h1>Create New User</h1>
    
    {{ Form::open(['route' => 'users.store']) }}
      
      <div>
        {{ Form::label('username', 'Username: ') }}
        {{ Form::text('username') }}
        {{ $errors->first('username', '<span>:message</span>') }}
      </div>
      <div>
        {{ Form::label('password', 'Password: ') }}
        {{ Form::text('password') }}
        {{ $errors->first('password') }}
      </div>

      {{ Form::submit('Create User') }}


    {{ Form::close() }}
@stop
