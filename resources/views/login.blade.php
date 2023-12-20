@extends('master')

@section('content')
@if(!$errors->has('login'))
<p style="color: red;">{{ $errors->first('login') }}</p>
@endif

@if(session('danger'))
<div class="alert alert-danger">
  {{ session('danger') }}
</div>
@endif

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form class="form-signin" method="post" action="{{ route('login') }}">
            @csrf
            <input class="form-control" type="text" id="firstName" name="firstName" placeholder="usuario" required />
            <input class="form-control" type="password" id="password" name="password" placeholder="senha" required />
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            <hr>
            <button class="btn btn-primary btn-sm float-right" type="submit">login</button>
            <p>Não está registrado? <a href="{{ route('users.create') }}">Criar uma conta</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection