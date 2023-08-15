@extends('master')

@section('content')

<h2>Edit</h2>

@if (session()->has('message'))
   {{ session()->get('message') }}
@endif
<div class="justify-content-between">
<form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="firstName" value="{{ $user->firstName }}">
    <input type="text" name="lastName" value="{{ $user->lastName }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <input type="text" name="password" placeholder="New password">
    <button type="submit">Update</button>
</form>
    <a class="btn btn-dark mg-bt" href="{{ route('users.index') }}" >Show Users</a>
</div>


@endsection