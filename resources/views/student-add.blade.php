@extends('layouts.template')

@section('title', 'Add new Student')
@section('content')

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="student" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Input Name"
                                name="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Gender</label>
                            <select class="form-select" aria-label="Default select example" name="gender">
                                <option selected disabled>Gender</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Nim</label>
                            <input type="text" class="form-control" id="nim" placeholder="Input Nim"
                                name="nim">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Class</label>
                            <select class="form-select" aria-label="Default select example" name="class_id">
                                <option selected disabled>Class</option>
                                @foreach ($class as $c)
                                    <option value="{{ $c['id'] }}">{{ $c['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection
