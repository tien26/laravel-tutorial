<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $data = [
            'students' => StudentModel::all()
        ];
        return view('student', $data);
    }
}
