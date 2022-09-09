@extends('layouts.template')

@section('title', 'Class')
@section('content')
    <h1>Student List</h1>
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
                    <td><a href="class-detail/{{ $c->id }}" class="btn btn-sm btn-warning">Detail</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
