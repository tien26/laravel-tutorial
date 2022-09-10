<?php

namespace App\Http\Controllers;

use App\Models\ClassStudentsModel;
use App\Models\TearcherModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function create()
    {
        $data = [
            'teacher' => TearcherModel::select('id', 'name')->get()
        ];
        return view('class-add', $data);
    }

    public function store(Request $request)
    {
        $class = ClassStudentsModel::create($request->all());
        if ($class) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new data success');
        }
        return redirect('/class');
    }

    public function edit($id)
    {
        $data = [
            'class' => ClassStudentsModel::findOrFail($id)
        ];
        return view('class-edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = ClassStudentsModel::findOrFail($id);
        $data->update($request->all());
        return redirect('/class');
    }
}
