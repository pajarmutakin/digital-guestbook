<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Create;
// use App\Http\Controllers\Delete;
// use App\Http\Controllers\Read;
// use App\Http\Controllers\Update;
use App\Http\Controllers\GuestController;
// use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/read', [GuestController::class, 'read'])->name('read');
Route::get('/', [GuestController::class, 'create']);
Route::post('/store', [GuestController::class, 'store']);
Route::get('/edit/{id}', [GuestController::class, 'edit']);
Route::put('/update/{id}', [GuestController::class, 'update']);
Route::get('/destroy/{id}', [GuestController::class, 'destroy']);



// Route::get('/create', [GuestController::class, 'create']);
// Route::get('/delete', [GuestController::class, 'delete']);
// Route::get('/read', [GuestController::class, 'read']);
// Route::get('/update', [GuestController::class, 'update']);
// Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
