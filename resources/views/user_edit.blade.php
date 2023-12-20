@extends('master')

@section('content')

<h2>Update</h2>

@if (session()->has('message'))
   {{ session()->get('message') }}
@endif
<div class="">
    <form class="formulario" action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
        @csrf
        <input class="input" type="hidden" name="_method" value="PUT">
        <input class="input" type="text" name="firstName" value="{{ $user->firstName }}">
        <input class="input" type="text" name="lastName" value="{{ $user->lastName }}">
        <input class="input" class="input" type="text" name="email" value="{{ $user->email }}">
        <input class="input" type="text" name="password" placeholder="New password">
        <input type="file" name="image_path">
        <button type="submit">Update</button>
    </form>
        <a class="" href="{{ route('users.index') }}" >Return</a>   
</div>




@endsection