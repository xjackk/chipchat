<!-- app/views/users/show.blade.php -->
@extends('layouts.app')

@section('content')

<center><h1>Showing {{ $user->name }}'s Profile</h1></center>

	<div class="jumbotron text-center">
		<h2>{{ $user->name }}</h2>
		<p>
			<strong>Email:</strong> {{ $user->email }}<br>
		</p>
	</div>

@endsection