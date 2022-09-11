<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\ClassStudentsModel;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    public function index()
    {
        $data = [
            'students' => StudentModel::paginate(5)
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

    public function create()
    {
        $data = [
            'class' => ClassStudentsModel::select('id', 'name')->get()
        ];
        return view('student-add', $data);
    }

    public function store(StudentCreateRequest $request)
    {
        $student = StudentModel::create($request->all());
        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new data success');
        }

        return redirect('/students');
    }

    public function edit($id)
    {
        $student = StudentModel::findOrFail($id);
        $data = [
            'student' => StudentModel::with('class')->findOrFail($id),
            'class' => ClassStudentsModel::where('id', '!=', $student['class_id'])->get(['id', 'name'])
        ];
        return view('student-edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = StudentModel::findOrFail($id);
        $data->update($request->all());
        return redirect('/students');
    }

    public function destroy($id)
    {
        StudentModel::findOrFail($id)->delete();
        Session::flash('status', 'success');
        Session::flash('message', 'delete success');
        return redirect('/students');
    }

    public function deletedStudent()
    {
        $data = [
            'students' => StudentModel::onlyTrashed()->get()
        ];
        return view('student-deleted-list', $data);
    }

    public function restore($id)
    {
        StudentModel::withTrashed()->where('id', $id)->restore();
        Session::flash('status', 'success');
        Session::flash('message', 'restore success');
        return redirect('/students');
    }
}
