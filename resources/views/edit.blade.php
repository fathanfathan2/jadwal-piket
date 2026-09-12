<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Jadwal Piket</title>
</head>
<body>
    <h1>Edit Jadwal Piket</h1>

    <!-- Formulir Edit Data -->
    <form action="/piket/{{ $jadwal->id }}" method="POST">
        @csrf
        @method('PUT') <!-- Wajib ditambahkan agar Laravel tahu ini form untuk Update -->
        
        <label>Nama Siswa:</label>
        <!-- value="" digunakan untuk menampilkan nama yang sudah ada di database sebelumnya -->
        <input type="text" name="nama_siswa" value="{{ $jadwal->nama_siswa }}" required>
        
        <label>Hari:</label>
        <select name="hari" required>
            <option value="Senin" {{ $jadwal->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
            <option value="Selasa" {{ $jadwal->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
            <option value="Rabu" {{ $jadwal->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
            <option value="Kamis" {{ $jadwal->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
            <option value="Jumat" {{ $jadwal->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
        </select>
        
        <button type="submit">Simpan Perubahan</button>
    </form>

    <br><br>
    <a href="/piket">Batal dan Kembali</a>
</body>
</html>