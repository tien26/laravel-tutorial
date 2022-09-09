@extends('layouts.template')

@section('title', 'Eskul')
@section('content')
    <h1>Eskul List</h1>
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
                    <td><a href="eskul-detail/{{ $e['id'] }}" class="btn btn-sm btn-warning">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
