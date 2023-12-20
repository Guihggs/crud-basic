@extends('master')

<h1 class="d-flex justify-content-center">Create</h1>

@section('content')


@if (session()->has('message'))
   {{ session()->get('message') }}
@endif


<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Create</div>
        <div class="card-body">
        <form class="formulario" action="{{ route('users.store') }}" method="post">
            @csrf
            <input class="form-control" type="text" name="firstName" placeholder="Your firstName">
            <input class="form-control" type="text" name="lastName" placeholder="Your lastName">
            <input class="form-control" type="text" name="email" placeholder="Your email">
            <input type="file" name="img">
            <input class="form-control" type="text" name="password" placeholder="Your password">
            <button class="btn btn-dark" type="submit">Create</button>
        </form>
        <a type="button" class="btn btn-primary d-flex justify-content-center" href="{{ route('login') }}">Login</a>
        </div>
      </div>
    </div>
  </div>
</div>

@if (session()->has('usuario'))
<a href="{{ route('logout') }}" class="btn btn-dark" method="get">Logout</a>
@endif

@endsection