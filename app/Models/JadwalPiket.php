<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalPiket extends Model
{
    // Tambahkan baris ini agar kita bisa menyimpan nama dan hari
    protected $fillable = ['nama_siswa', 'hari'];
}