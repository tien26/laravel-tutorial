@extends('layouts.template')

@section('title', 'Add new Class')
@section('content')

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="class" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Class Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Input Class Name"
                                name="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Teacher</label>
                            <select class="form-select" aria-label="Default select example" name="teacher_id">
                                <option selected disabled>Teacher</option>
                                @foreach ($teacher as $teacher)
                                    <option value="{{ $teacher['id'] }}">{{ $teacher['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection
