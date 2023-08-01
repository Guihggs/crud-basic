@extends('master')

    <div class="d-flex justify-content-around">
        <h1>Users</h1>
    </div>
    <div class="d-flex justify-content-around">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
        <a href="{{ route('logout') }}" class="btn btn-dark" method="POST">Logout</a>
    </div>
        <hr>

@section('content')

<ul>
    @foreach ($users as $user)
        
    <div class="card column">
        <h2>{{ $user->firstName }} - {{ $user->lastName}}</h2>
        <p>Email: {{ $user->email }}</p>
                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>
                </form>
    </div>
    @endforeach
</ul>
@endsection
