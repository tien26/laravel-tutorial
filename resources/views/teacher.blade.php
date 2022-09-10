@extends('layouts.template')

@section('title', 'Teachers')
@section('content')
    <h1>Teachers List</h1>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col">
            <a href="teacher-add" class="btn btn-primary">Add Teacher</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($teachers as $t)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->name }}</td>
                    <td><a href="teacher-detail/{{ $t->id }}" class="btn btn-sm btn-warning">Detail</a> | <a
                            href="teacher-edit/{{ $t->id }}" class="btn btn-sm btn-info">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
