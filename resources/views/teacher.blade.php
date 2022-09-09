@extends('layouts.template')

@section('title', 'Teachers')
@section('content')
    <h1>Teachers List</h1>
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
                    <td><a href="teacher-detail/{{ $t->id }}" class="btn btn-sm btn-warning">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
