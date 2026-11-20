@extends('layout.layout')

@section('title', 'Ubah Pelanggan - Laundry-In')

@section('content')
<div class="page-heading">
    <div class="breadcrumb">Laundry-In / Data Pelanggan / <span>Ubah</span></div>
    <h1>Ubah Data Pelanggan</h1>
    <p>Perbarui data pelanggan {{ $pelanggan->nama }}</p>
</div>

<div class="inventory-card" style="max-width: 680px;">
    <div class="card-header">
        <div class="card-title">
            <h2>Form Ubah Pelanggan</h2>
            <p>Pastikan perubahan data udah sesuai sebelum disimpan</p>
        </div>
    </div>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Pelanggan</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $pelanggan->nama) }}" required>
        </div>

        <div class="form-group">
            <label for="no_hp">No. HP</label>
            <input type="text" id="no_hp" name="no_hp" value="{{ old('no_hp', $pelanggan->no_hp) }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="4" required>{{ old('alamat', $pelanggan->alamat) }}</textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-tambah">Simpan Perubahan</button>
            <a href="{{ route('pelanggan.index') }}" class="btn btn-ubah">Batal</a>
        </div>
    </form>
</div>
@endsection