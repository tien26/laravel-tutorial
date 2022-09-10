@extends('layouts.template')

@section('title', 'Edit Eskul')
@section('content')

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="/eskul/{{ $eskul['id'] }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Input Name" name="name"
                                value="{{ $eskul['name'] }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection
