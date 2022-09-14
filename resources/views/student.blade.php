@extends('layouts.template')

@section('title', 'Students')
@section('content')
    <h1>Student List</h1>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col d-flex justify-content-between">
            <a href="student-add" class="btn btn-primary">Add Student</a>
            <a href="student-deleted" class="btn btn-secondary">Show deleted data</a>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-12 col-sm-8 col-md-5">
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="keyword" aria-label="Username"
                        aria-describedby="basic-addon1" name="keyword">
                    <button type="submit" class="input-group-text btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Nim</th>
                        <th>Class</th>
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
                            <td>{{ $s->class->name }}</td>
                            <td>
                                <form action="student-delete/{{ $s->id }}" method="post">
                                    <a href="student/{{ $s->id }}" class="btn btn-sm btn-warning">Detail</a> | <a
                                        href="student-edit/{{ $s->id }}" class="btn btn-sm btn-info">Edit</a> |
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Yakin ? ')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            {{ $students->withQueryString()->links() }}
        </div>
    </div>


@endsection
