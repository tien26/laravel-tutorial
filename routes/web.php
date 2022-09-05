<?php

use App\Http\Controllers\StudentsController;
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
