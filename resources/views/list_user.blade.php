@extends('master')

@section('content')

@foreach ($users as $user)
    <li>{{ $user->firstName }} |  {{ $user->lastName }} </li>
@endforeach 

@endsection