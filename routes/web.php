<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiketController; // Wajib tambahkan baris ini

Route::get('/', function () {
    return view('welcome');
});


// Rute GET wajib diarahkan ke fungsi index di Controller
Route::get('/piket', [PiketController::class, 'index']);

// Rute POST menangkap inputan form dan diarahkan ke fungsi store
Route::post('/piket', [PiketController::class, 'store']);

// Rute untuk menghapus data berdasarkan ID
Route::delete('/piket/{id}', [PiketController::class, 'destroy']);

// Rute untuk menampilkan formulir edit
Route::get('/piket/{id}/edit', [PiketController::class, 'edit']);

// Rute untuk menyimpan data yang sudah diedit
Route::put('/piket/{id}', [PiketController::class, 'update']);