@extends('master')

@section('content')

<div class="d-flex justify-content-around">
<h2>Users</h2>
<a type="button" class="btn btn-dark" href="{{ route('home') }}" >Home Page</a>
</div>


<a href="{{ route('users.create') }}">Create</a>

<hr>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->firstName }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> | <a href="{{ route('users.show', ['user' => $user->id]) }}">Show</a>
    @endforeach
</ul>




@endsection