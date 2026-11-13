<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h2>Tambah Data Pelanggan Baru</h2>
    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>
        
        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>
        
        <label>No HP:</label><br>
        <input type="text" name="no_hp" required><br><br>
        
        <button type="submit">Simpan</button>
        <a href="{{ route('pelanggan.index') }}">Batal</a>
    </form>
</body>
</html>