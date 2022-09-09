@extends('layouts.template')

@section('title', 'Student-detail')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3>Detail class {{ $teacher['name'] }}</h3>
                    @if ($teacher->class)
                        @foreach ($teacher->class->students as $s)
                            <h3> kelas {{ $teacher->class['name'] }}</h3>
                        @endforeach
                    @else
                        Not Teacher class
                    @endif
                </div>
                @if ($teacher->class)
                    <div class="row">
                        <div class="col-12">
                            @foreach ($teacher->class->students as $s)
                                <li class="list-group-item">{{ $s['name'] }}</li>
                            @endforeach
                        </div>
                    </div>
                @else
                    not found
                @endif
            </div>
        </div>
    </div>
@endsection
