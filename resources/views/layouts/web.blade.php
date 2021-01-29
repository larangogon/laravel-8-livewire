<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        laravel 8.edu
    </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="shadow-lg">
    <div class="bg-blue-900 py-1">
    </div>
    <nav class="bg-blue-700 py-2">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/xxx.png') }}" class="h-8 mx-auto">
        </a>
    </nav>
</header>
<main class="py-10">
    <div class="container mx-auto px-4">
        @yield(('content'))
    </div>
</main>
<footer class="py-4 text-center">
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        @endauth
    @endif
</footer>
</body>
</html>
