<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pelanggan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
</head>
<body>
    <p>
        Halo, <strong>{{ Auth::user()->name }}</strong> (Role: {{ Auth::user()->role }}) |
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </p>
    
    <h2>Data Pelanggan Laundry</h2>
    <a href="{{ route('pelanggan.create') }}">+ Tambah Pelanggan Baru</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelanggan as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>
                    <a href="{{ route('pelanggan.edit', $item->id) }}">Edit</a>
                    
                    @if(Auth::user()->role === 'admin')
                        | 
                        <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>