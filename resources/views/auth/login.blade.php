@extends('layout.layout')

@section('title', 'Login - Laundry-In')

@section('content')
<div class="login-wrapper">
    <div class="inventory-card login-card">
        <div class="card-header" style="margin-bottom: 20px;">
            <div class="card-title">
                <div class="logo" style="margin-bottom: 12px; font-size: 22px;">
                    <span class="logo-icon" style="width: 26px; height: 26px;"></span>
                    Laundry-In
                </div>
                <h2>Login Sistem</h2>
                <p>Masuk buat kelola data pelanggan</p>
            </div>
        </div>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="admin@gmail.com" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-tambah" style="width: 100%; margin-top: 6px;">
                Login
            </button>
        </form>
    </div>
</div>
@endsection