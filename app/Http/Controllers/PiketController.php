<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPiket; // Memanggil Model untuk akses database

class PiketController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel jadwal_pikets
        $jadwal = JadwalPiket::all();

        // Mengirim data tersebut ke halaman view 'piket'
        return view('piket', ['jadwal' => $jadwal]);
    }
}