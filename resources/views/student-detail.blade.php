@extends('layouts.template')

@section('title', 'Student-detail')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3>Detail siswa {{ $student['name'] }}</h3>
                </div>
                <div class="row">
                    <div class="col-6">
                        <li class="list-group-item fw-bold">NIM</li>
                        <li class="list-group-item fw-bold">Gender</li>
                        <li class="list-group-item fw-bold">Class</li>
                        <li class="list-group-item fw-bold">Teacher</li>
                        <li class="list-group-item fw-bold">Eskul</li>
                    </div>
                    <div class="col-6">
                        <li class="list-group-item">{{ $student['nim'] }}</li>
                        @if ($student['gender'] == 'L')
                            <li class="list-group-item">Laki-Laki</li>
                        @else
                            <li class="list-group-item">Perempuan</li>
                        @endif
                        <li class="list-group-item">{{ $student->class['name'] }}</li>
                        <li class="list-group-item">{{ $student->class->teacher['name'] }}</li>
                        <li class="list-group-item">
                            @foreach ($student->eskuls as $e)
                                {{ $e['name'] }} |
                            @endforeach
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
