@extends('master')

<h1 class="d-flex justify-content-center">Login</h1>
   
@section('content')

    <div class="tela-login">
        <div class="formulario">
            @if(!$errors->has('login'))
                <p style="color: red;">{{ $errors->first('login') }}</p>
             @endif 
             
             @if(session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
                <form class="formulario-login" method="post" action="{{ route('login') }}">
                    @csrf
                    <input type="text" id="firstName" name="firstName" placeholder="usuario" required/>
                    <input type="password" id="password" name="password" placeholder="senha" required/>
                    <button>login</button>
                    <p class="mensagem">Não está registrado? <a href="{{ route('users.create') }}">Criar uma conta</a></p>
                </form>
        </div>
    </div>

@endsection