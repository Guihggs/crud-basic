@extends('master')

@section('content')

<h2>Users</h2>

<a href="{{ route('users.create') }}">Create</a>

<hr>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->firstName }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> | <a href="{{ route('users.show', ['user' => $user->id]) }}">Show</a>
    @endforeach
</ul>


@endsection