<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Piket PPLG</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800 font-sans p-6">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-8">Jadwal Piket Kelas PPLG</h1>

        <form action="/piket" method="POST" class="flex flex-col md:flex-row gap-4 mb-8 bg-blue-50 p-6 rounded-lg border border-blue-100">
            @csrf
            <div class="flex-1">
                <label class="block text-sm font-semibold mb-2">Nama Siswa:</label>
                <input type="text" name="nama_siswa" placeholder="Misal: Yukafii, Billy..." required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            
            <div class="flex-1">
                <label class="block text-sm font-semibold mb-2">Hari:</label>
                <select name="hari" required class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    <option value="" disabled selected>-- Pilih Hari --</option>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                </select>
            </div>
            
            <div class="flex items-end">
                <button type="submit" class="w-full md:w-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md transition duration-300">Tambah Data</button>
            </div>
        </form>

        <h2 class="text-xl font-semibold mb-4 border-b pb-2">Daftar Jadwal Saat Ini</h2>
        <ul class="space-y-3">
            @foreach ($jadwal as $j)
                <li class="flex items-center justify-between bg-gray-50 p-4 rounded-md border hover:shadow-sm transition">
                    <div>
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full font-bold mr-2">{{ $j->hari }}</span>
                        <span class="font-medium text-lg">{{ $j->nama_siswa }}</span>
                    </div>
                    
                    <div class="flex gap-2">
                        <a href="/piket/{{ $j->id }}/edit" class="bg-yellow-400 hover:bg-yellow-500 text-white text-sm px-3 py-1 rounded shadow transition">Edit</a>
                        
                        <form action="/piket/{{ $j->id }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white text-sm px-3 py-1 rounded shadow transition" onclick="return confirm('Yakin ingin menghapus jadwal ini?')">Hapus</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>