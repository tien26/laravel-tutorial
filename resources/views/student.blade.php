@extends('layouts.template')
    
@section('title', 'Student')
@section('content')
    <h1>Student List</h1>
    <ol>
        @foreach ($students as $s)
            <li>{{$s->name}} | {{$s->nim}} | {{$s->gender}}</li>
        @endforeach
    </ol>
@endsection