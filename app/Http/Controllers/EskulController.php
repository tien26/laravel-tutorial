<?php

namespace App\Http\Controllers;

use App\Models\EskulModel;
use Illuminate\Http\Request;

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
}
