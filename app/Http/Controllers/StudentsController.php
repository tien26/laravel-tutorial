<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
    {
        $data = [
            'students' => StudentModel::get()
        ];
        return view('student', $data);
    }

    public function show($id)
    {
        $data = [
            'student' => StudentModel::with(['class.teacher', 'eskuls'])->findOrFail($id)
        ];
        return view('student-detail', $data);
    }
}
