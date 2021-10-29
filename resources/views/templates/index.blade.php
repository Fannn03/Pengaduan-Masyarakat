<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Pengaduan Masyarakat | Index Page</title>
</head>

<body class="bg-gray-800 font-mono">
    <div class="container-md sm:p-10 py-8 px-5 flex sticky top-0 z-50 justify-between text-white bg-gray-800">
        <div class="flex px-5">
            <a href="{{ route('index') }}"
                class="sm:text-2xl text-xl transition duration-300 hover:text-purple-500">Pengaduan Masyarakat</a>
        </div>
        <div class="hidden sm:flex sm:space-x-5 sm:px-5">
            @if (request()->routeIs('index'))
            <a href="" class="text-xl transition duration-300 hover:text-purple-500">Home</a>
            <a href="" class="text-xl transition duration-300 hover:text-purple-500">Layanan</a>
            <a href="" class="text-xl transition duration-300 hover:text-purple-500">Tentang
                Kami</a>
            @endif
            @auth
            <a href="{{ route('index-dashboard') }}" class="text-xl transition duration-300 hover:text-purple-500">Dashboard</a>
            <a href="{{ route('logout') }}" class="text-xl transition duration-300 hover:text-purple-500"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>            
            @else
            <a href="{{ route('login') }}" class="text-xl transition duration-300 hover:text-purple-500">Login</a>
            <a href="{{ route('register') }}" class="text-xl transition duration-300 hover:text-purple-500">Register</a>
            @endauth
        </div>
    </div>
    @yield('content')
    <a href="">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</body>

</html>
