@extends('dashboard.app')

@section('content')
    @auth
        <h1>You're logged in</h1>
    @endauth

@endsection