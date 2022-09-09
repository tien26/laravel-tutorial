@extends('layouts.template')
    
@section('title', 'Students')
@section('content')
    <h1>Student List</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Nim</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $s)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->gender}}</td>
                <td>{{$s->nim}}</td>
                <td><a href="student/{{$s->id}}" class="btn btn-sm btn-warning">Detail</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    
@endsection