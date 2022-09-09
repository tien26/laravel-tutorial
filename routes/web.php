<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TearcherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'Irfan',
        'role' => 'users',
        'buah' => ['pisang', 'mangga', 'kiwi', 'sawo']
    ]);
});

Route::get('/students', [StudentsController::class, 'index']);
Route::get('/student/{id}', [StudentsController::class, 'show']);

Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);

Route::get('/eskul', [EskulController::class, 'index']);
Route::get('/eskul-detail/{id}', [EskulController::class, 'show']);

Route::get('/teacher', [TearcherController::class, 'index']);
Route::get('/teacher-detail/{id}', [TearcherController::class, 'show']);
