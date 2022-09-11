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
Route::get('/student-add', [StudentsController::class, 'create']);
Route::post('/student', [StudentsController::class, 'store']);
Route::get('/student-edit/{id}', [StudentsController::class, 'edit']);
Route::put('/student/{id}', [StudentsController::class, 'update']);
Route::delete('/student-delete/{id}', [StudentsController::class, 'destroy']);
Route::get('/student-deleted', [StudentsController::class, 'deletedStudent']);
Route::get('/student/{id}/restore', [StudentsController::class, 'restore']);

Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);
Route::get('/class-add', [ClassController::class, 'create']);
Route::post('/class', [ClassController::class, 'store']);
Route::get('/class-edit/{id}', [ClassController::class, 'edit']);
Route::put('/class/{id}', [ClassController::class, 'update']);

Route::get('/eskul', [EskulController::class, 'index']);
Route::get('/eskul-detail/{id}', [EskulController::class, 'show']);
Route::get('/eskul-add', [EskulController::class, 'create']);
Route::post('/eskul', [EskulController::class, 'store']);
Route::get('/eskul-edit/{id}', [EskulController::class, 'edit']);
Route::put('/eskul/{id}', [EskulController::class, 'update']);

Route::get('/teacher', [TearcherController::class, 'index']);
Route::get('/teacher-detail/{id}', [TearcherController::class, 'show']);
Route::get('/teacher-add', [TearcherController::class, 'create']);
Route::post('/teacher', [TearcherController::class, 'store']);
Route::get('/teacher-edit/{id}', [TearcherController::class, 'edit']);
Route::put('/teacher/{id}', [TearcherController::class, 'update']);
