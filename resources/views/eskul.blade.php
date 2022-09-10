@extends('layouts.template')

@section('title', 'Eskul')
@section('content')
    <h1>Eskul List</h1>

    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col">
            <a href="eskul-add" class="btn btn-primary">Add Eskul</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($eskul as $e)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $e->name }}</td>
                    <td><a href="eskul-detail/{{ $e['id'] }}" class="btn btn-sm btn-warning">Detail</a> | <a
                            href="eskul-edit/{{ $e['id'] }}" class="btn btn-sm btn-info">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
