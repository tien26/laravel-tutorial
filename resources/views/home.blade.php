@extends('layouts.template')

@section('title', 'Home')
@section('content')
    <h1>Selamat Datang DiAplikasi Tutorial</h1>
    <h1>{{ Auth::user()->name }}</h1>
    <h1>Role Anda : {{ Auth::user()->role->name }}</h1>

@endsection
