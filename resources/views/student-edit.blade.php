@extends('layouts.template')

@section('title', 'Edit Student')
@section('content')

    <div class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="/student/{{ $student['id'] }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Input Name" name="name"
                                value="{{ $student['name'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Gender</label>
                            <select class="form-select" aria-label="Default select example" name="gender">
                                <option disabled>Gender</option>
                                <option selected value="{{ $student['gender'] }}">{{ $student['gender'] }}</option>
                                @if ($student['gender'] = 'P')
                                    <option value="L">L</option>
                                @else
                                    <option value="P">P</option>
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Nim</label>
                            <input type="text" class="form-control" id="nim" placeholder="Input Nim" name="nim"
                                value="{{ $student['nim'] }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Class</label>
                            <select class="form-select" aria-label="Default select example" name="class_id">
                                <option disabled>Class</option>
                                <option value="{{ $student->class['id'] }}">{{ $student->class['name'] }}</option>
                                @foreach ($class as $c)
                                    <option value="{{ $c['id'] }}">{{ $c['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection
