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
    <div class="container-md sm:p-10 py-8 px-5 flex justify-between text-white bg-gray-800">
        <div class="flex px-5">
            <a href="{{ route('index') }}" class="sm:text-2xl text-xl transition duration-300 hover:text-purple-500">Pengaduan Masyarakat</a >
        </div>
        <div class="hidden sm:flex sm:space-x-5 sm:px-5">
            <a href="" class="text-xl transition duration-300 hover:text-purple-500">Home</a>
            <a href="" class="text-xl transition duration-300 hover:text-purple-500">Layanan</a>
            <a href="" class="text-xl transition duration-300 hover:text-purple-500">Tentang Kami</a>
            <a href="" class="text-xl transition duration-300 hover:text-purple-500">Login</a>
            <a href="" class="text-xl transition duration-300 hover:text-purple-500">Register</a>
        </div>
    </div>
    @yield('content')  
</body>
</html>