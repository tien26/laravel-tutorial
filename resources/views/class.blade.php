@extends('layouts.template')

@section('title', 'Class')
@section('content')
    <h1>Class List</h1>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col">
            <a href="class-add" class="btn btn-primary">Add Class</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($class as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->name }}</td>
                    <td><a href="class-detail/{{ $c->id }}" class="btn btn-sm btn-warning">Detail</a> | <a
                            href="class-edit/{{ $c->id }}" class="btn btn-sm btn-info">Edit</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
