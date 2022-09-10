<?php

namespace App\Http\Controllers;

use App\Models\EskulModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EskulController extends Controller
{
    public function index()
    {
        $data = [
            'eskul' => EskulModel::get()
        ];
        return view('eskul', $data);
    }
    public function show($id)
    {
        $data = [
            'eskul' => EskulModel::with('students')->findOrFail($id)
        ];
        return view('eskul-detail', $data);
    }

    public function create()
    {
        return view('eskul-add');
    }

    public function store(Request $request)
    {
        $eskul = EskulModel::create($request->all());
        if ($eskul) {
            Session::flash('status', 'success');
            Session::flash('message', 'Add new data success');
        }
        return redirect('/eskul');
    }

    public function edit($id)
    {
        $data = [
            'eskul' => EskulModel::findOrFail($id)
        ];
        return view('eskul-edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = EskulModel::findOrFail($id);
        $data->update($request->all());
        return redirect('/eskul');
    }
}
