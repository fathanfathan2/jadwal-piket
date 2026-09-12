<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Piket PPLG</title>
</head>
<body>
    <h1>Jadwal Piket Kelas</h1>

    <!-- Formulir Tambah Data dengan Dropdown -->
    <form action="/piket" method="POST">
        @csrf
        <label>Nama Siswa:</label>
        <input type="text" name="nama_siswa" placeholder="Misal: Yukafii, Billy..." required>
        
        <label>Hari:</label>
        <select name="hari" required>
            <option value="" disabled selected>-- Pilih Hari --</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
        </select>
        
        <button type="submit">Tambah Jadwal</button>
    </form>

    <hr>

    <!-- Daftar Data dari Database -->
    <ul>
        @foreach ($jadwal as $j)
<li style="margin-bottom: 10px;">
                {{ $j->hari }}: {{ $j->nama_siswa }}
                
                <!-- Tombol Edit -->
                <a href="/piket/{{ $j->id }}/edit" style="margin-left: 10px; color: blue; text-decoration: none;">Edit</a>
                <!-- Tombol Hapus -->
                <form action="/piket/{{ $j->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: red; margin-left: 10px;">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="/">Kembali ke Beranda</a>
</body>
</html>