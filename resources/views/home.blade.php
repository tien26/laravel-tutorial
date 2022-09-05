@extends('layouts.template')
    
@section('title', 'Home')
@section('content')
<h1>Hello, {{$name}}!</h1>
<h1>role, {{$role}}!</h1>
{{-- @if ($role == 'admin')
    <a href="">ini halaman admin</a>
    @else
    <a href="">ini halaman umum</a>
@endif --}}

  @switch($role)
      @case($role == 'admin')
      <a href="">ini halaman admin</a>
          @break
  
      @case($role == 'users')
      <a href="">ini halaman users</a>
          @break
  
      @default
      <a href="">ini halaman umum</a>
  @endswitch

  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nama</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($buah as $item)
        <tr>
            <td scope="row">{{ $loop->iteration}}</td>
            <td>{{$item}}</td>
                
          </tr>
          @endforeach
      </tbody>
    </table>
    
@endsection
