@extends('master')

@section('content')

<h2 class="d-flex justify-content-center">Home</h2>
<div class="d-flex justify-content-around">
<a href="{{ route('users.create') }}">Create</a>
<a href="{{ route('users.index') }}">Show Users</a>
</div>

@endsection