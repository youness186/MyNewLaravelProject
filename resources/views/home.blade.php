@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <h1>Hey</h1>
    <ul>
    @foreach($users as $user)
        <li>{{ $user->username }}</li>
    @endforeach
    </ul>
@endsection