<?php

namespace App\Http\Controllers;

use App\Models\ClassStudentsModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $data = [
            'class' => ClassStudentsModel::get()
        ];
        return view('class', $data);
    }

    public function show($id)
    {
        $data = [
            'class' => ClassStudentsModel::with(['students', 'teacher'])->findOrFail($id)
        ];
        return view('class-detail', $data);
    }
}
