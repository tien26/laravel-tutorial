@extends('layouts.template')

@section('title', 'Student-detail')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3>Detail class {{ $class['name'] }}</h3>
                </div>
                <div class="row">
                    <div class="col-6">
                        <li class="list-group-item fw-bold">Teacher</li>
                        <li class="list-group-item fw-bold">Students</li>
                    </div>
                    <div class="col-6">
                        <li class="list-group-item">{{ $class->teacher['name'] }}</li>
                        <li class="list-group-item">
                            <ol>
                                @foreach ($class->students as $s)
                                    <li>
                                        {{ $s['name'] }}
                                    </li>
                                @endforeach
                            </ol>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
