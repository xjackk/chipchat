<!-- app/views/nerds/edit.blade.php -->
@extends('layouts.app')

@section('content')

<h1>Edit {{ $user->name }}</h1>


{{ Form::model($user, array('action' => array('UserController@update', $user->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('name', 'Name') }}
		{{ Form::text('name', null, array('class' => 'form-control')) }}
	</div>

	{{ Form::submit('Edit User Name!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@endsection


