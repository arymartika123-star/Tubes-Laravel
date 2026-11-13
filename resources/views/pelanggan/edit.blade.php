<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>
</head>
<body>
    <h2>Edit Data Pelanggan</h2>
    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')  
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $pelanggan->nama }}" required><br><br>
        
        <label>Alamat:</label><br>
        <textarea name="alamat" required>{{ $pelanggan->alamat }}</textarea><br><br>
        
        <label>No HP:</label><br>
        <input type="text" name="no_hp" value="{{ $pelanggan->no_hp }}" required><br><br>
        
        <button type="submit">Update</button>
        <a href="{{ route('pelanggan.index') }}">Batal</a>
    </form>
</body>
</html>