<?php

use App\Http\Controllers\AuthController;
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
    return view('home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/students', [StudentsController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [StudentsController::class, 'show'])->middleware(['auth', 'must-admin-or-teacher']);
Route::get('/student-add', [StudentsController::class, 'create'])->middleware(['auth', 'must-admin-or-teacher']);
Route::post('/student', [StudentsController::class, 'store'])->middleware(['auth', 'must-admin-or-teacher']);
Route::get('/student-edit/{id}', [StudentsController::class, 'edit'])->middleware(['auth', 'must-admin-or-teacher']);
Route::put('/student/{id}', [StudentsController::class, 'update'])->middleware(['auth', 'must-admin-or-teacher']);
Route::delete('/student-delete/{id}', [StudentsController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::get('/student-deleted', [StudentsController::class, 'deletedStudent'])->middleware(['auth', 'must-admin']);
Route::get('/student/{id}/restore', [StudentsController::class, 'restore'])->middleware(['auth', 'must-admin']);

Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class-detail/{id}', [ClassController::class, 'show'])->middleware('auth');
Route::get('/class-add', [ClassController::class, 'create'])->middleware('auth');
Route::post('/class', [ClassController::class, 'store'])->middleware('auth');
Route::get('/class-edit/{id}', [ClassController::class, 'edit'])->middleware('auth');
Route::put('/class/{id}', [ClassController::class, 'update'])->middleware('auth');

Route::get('/eskul', [EskulController::class, 'index'])->middleware('auth');
Route::get('/eskul-detail/{id}', [EskulController::class, 'show'])->middleware('auth');
Route::get('/eskul-add', [EskulController::class, 'create'])->middleware('auth');
Route::post('/eskul', [EskulController::class, 'store'])->middleware('auth');
Route::get('/eskul-edit/{id}', [EskulController::class, 'edit'])->middleware('auth');
Route::put('/eskul/{id}', [EskulController::class, 'update'])->middleware('auth');

Route::get('/teacher', [TearcherController::class, 'index'])->middleware('auth');
Route::get('/teacher-detail/{id}', [TearcherController::class, 'show'])->middleware('auth');
Route::get('/teacher-add', [TearcherController::class, 'create'])->middleware('auth');
Route::post('/teacher', [TearcherController::class, 'store'])->middleware('auth');
Route::get('/teacher-edit/{id}', [TearcherController::class, 'edit'])->middleware('auth');
Route::put('/teacher/{id}', [TearcherController::class, 'update'])->middleware('auth');
