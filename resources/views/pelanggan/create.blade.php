@extends('layout.layout')

@section('title', 'Tambah Pelanggan - Laundry-In')

@section('content')
<div class="page-heading">
    <div class="breadcrumb">Laundry-In / Data Pelanggan / <span>Tambah</span></div>
    <h1>Tambah Pelanggan</h1>
    <p>Input data pelanggan baru ke sistem</p>
</div>

<div class="inventory-card" style="max-width: 680px;">
    <div class="card-header">
        <div class="card-title">
            <h2>Form Tambah Pelanggan</h2>
            <p>Isi nama, nomor HP, dan alamat pelanggan dengan lengkap</p>
        </div>
    </div>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Pelanggan</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
            <label for="no_hp">No. HP</label>
            <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" placeholder="Contoh: 081234567890" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap" required>{{ old('alamat') }}</textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-tambah">Simpan</button>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-ubah">Batal</a>
        </div>
    </form>
</div>
@endsection