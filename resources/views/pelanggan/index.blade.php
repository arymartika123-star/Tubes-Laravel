@extends('layout.layout')

@section('title', 'Data Pelanggan - Laundry-In')

@section('content')
<div class="page-heading">
    <div class="breadcrumb">Laundry-In / <span>Data Pelanggan</span></div>
    <h1>Data Pelanggan</h1>
    <p>Kelola informasi kontak dan alamat pelanggan Laundry-In</p>
</div>

@if (session('success'))
    <div class="pesan">{{ session('success') }}</div>
@endif

<div class="inventory-card">
    <div class="card-header">
        <div class="card-title">
            <h2>Daftar Pelanggan</h2>
            <p>Menampilkan {{ $pelanggan->count() }} data pelanggan terdaftar</p>
        </div>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-tambah">+ Tambah Pelanggan</a>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>No. HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pelanggan as $item)
                    <tr>
                        <td class="nomor">{{ $loop->iteration }}</td>
                        <td class="merek">{{ $item->nama }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <div class="aksi">
                                <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-ubah">Ubah</a>

                                @if (auth()->user()->role === 'admin')
                                    <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" style="margin: 0;" onsubmit="return confirm('Yakin mau hapus pelanggan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-hapus">Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="empty-data">Belum ada data pelanggan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection