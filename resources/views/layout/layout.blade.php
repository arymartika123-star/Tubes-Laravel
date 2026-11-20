<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laundry-In')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    @auth
    <nav class="navbar">
        <a href="{{ route('pelanggan.index') }}" class="logo">
            <span class="logo-icon"></span>
            Laundry-In
        </a>

        <div class="nav-menu">
            <a href="{{ route('pelanggan.index') }}" class="{{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                Data Pelanggan
            </a>
            <a href="#" class="disabled-link">Data Layanan</a>
            <a href="#" class="disabled-link">Transaksi</a>
        </div>

        <div class="user-info">
            <div class="user-avatar">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>
            <div class="user-detail">
                <span class="user-name">{{ auth()->user()->name }}</span>
                <span class="user-role">{{ auth()->user()->role }}</span>
            </div>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </nav>
    @endauth

    <main class="main-container">
        @yield('content')

        <div class="footer">
            &copy; {{ date('Y') }} Laundry-In - Modul Data Pelanggan
        </div>
    </main>

</body>
</html>