@extends('layouts.template')

@section('title', 'Deleted Students')
@section('content')
    <h1>Student Deleted List</h1>

    <div class="row">
        <div class="col">
            <a href="students" class="btn btn-primary">Back</a>
        </div>
    </div>

    <table class="table text-center">
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
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->gender }}</td>
                    <td>{{ $s->nim }}</td>
                    <td><a href="/student/{{ $s->id }}/restore" class="btn btn-danger">Restore</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
