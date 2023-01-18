<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::get('/form', function () {
    return view('pages.form');
});

Route::post('/form/store', [NoteController::class, 'store']);

Route::get('/', [NoteController::class, 'index'])->name('note-galery');

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/admin/destroy/{guest:id}', [AdminController::class, 'destroy'])->middleware('auth');
