<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPiket;

class PiketController extends Controller
{
    public function index()
    {
        $jadwal = JadwalPiket::all();
        return view('piket', ['jadwal' => $jadwal]);
    }

    // Fungsi baru untuk memasukkan data ke database
    public function store(Request $request)
    {
        JadwalPiket::create([
            'nama_siswa' => $request->nama_siswa,
            'hari' => $request->hari,
        ]);

        return redirect('/piket');
    }

    public function destroy($id)
    {
        // Mencari jadwal berdasarkan ID, lalu menghapusnya
        $jadwal = JadwalPiket::find($id);
        $jadwal->delete();

        // Mengembalikan halaman ke daftar awal
        return redirect('/piket');
    }

    // Fungsi untuk memanggil halaman edit
    public function edit($id)
    {
        $jadwal = JadwalPiket::find($id);
        return view('edit', ['jadwal' => $jadwal]);
    }

    // Fungsi untuk memproses data baru ke database
    public function update(Request $request, $id)
    {
        $jadwal = JadwalPiket::find($id);
        $jadwal->update([
            'nama_siswa' => $request->nama_siswa,
            'hari' => $request->hari,
        ]);

        return redirect('/piket');
    }
}