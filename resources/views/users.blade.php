<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: login.blade.php", true, 301);
?>

    @extends('master')

    <div class="d-flex justify-content-around">
        <h1>Users</h1>
    </div>
    <div class="d-flex justify-content-around">
        <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
        <a href="{{ route('logout') }}" class="btn btn-dark" method="get">Logout</a>
    </div>
    <hr>

    @section('content')

    <div class="row">
        @foreach ($users as $user)
        <div class="col-sm-3">
            <div class="card">
                <img class="card-img-top" src="{{ $user->image_path }}" alt="Card image cap">
                <div class="card-body">
                    <h2>{{ $user->firstName }} {{ $user->lastName}}</h2>
                    <p class="card-text">Email: {{ $user->email }}</p>
                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    @endsection

<?php } ?>