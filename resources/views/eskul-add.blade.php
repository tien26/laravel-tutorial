@extends('layouts.template')

@section('title', 'Add new Eskul')
@section('content')

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="eskul" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Eskul Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Input Eskul Name"
                                name="name">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection
