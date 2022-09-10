<?php

namespace App\Http\Controllers;

use App\Models\TearcherModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function create()
    {
        return view('teacher-add');
    }

    public function store(Request $request)
    {
        $teacher = TearcherModel::create($request->all());
        if ($teacher) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new data success');
        }
        return redirect('/teacher');
    }

    public function edit($id)
    {
        $data = [
            'teacher' => TearcherModel::findOrFail($id)
        ];
        return view('teacher-edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = TearcherModel::findOrFail($id);
        $data->update($request->all());
        return redirect('/teacher');
    }
}
