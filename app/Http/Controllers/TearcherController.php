<?php

namespace App\Http\Controllers;

use App\Models\TearcherModel;
use Illuminate\Http\Request;

class TearcherController extends Controller
{
    public function index()
    {
        $data = [
            'teachers' => TearcherModel::get()
        ];
        return view('teacher', $data);
    }

    public function show($id)
    {
        $data = [
            'teacher' => TearcherModel::with('class.students')->findOrFail($id)
        ];
        return view('teacher-detail', $data);
    }
}
