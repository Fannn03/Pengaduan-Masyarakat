@extends('templates.index')
@section('content')
    <div class="sm:container-md sm:w-1/2 sm:mx-auto sm:my-10 border p-10 font-sans flex flex-col sm:space-y-5 text-gray-100 rounded-md">
        <h1 class="sm:text-2xl border-b pb-3">Halaman Login</h1>
        @if (session('register'))
            <div class="bg-green-500 p-3 rounded-md">
                {{ session('register') }}
            </div>
        @elseif (session('login'))
        <div class="bg-red-500 p-3 rounded-md">
            {{ session('login') }}
        </div>
        @endif
        <form action="{{ route('login') }}" method="POST" class="flex flex-col sm:px-3 sm:space-y-5">
            @csrf
            <div class="flex flex-col sm:space-y-3">
                <p class="text-xl">Username</p>
                <input type="text" value="{{ old('username') }}" name="username" class="@error('username') border-2 border-red-500 @enderror w-full rounded sm:px-3 sm:py-2 text-black" autofocus autocomplete="off" id="">
            @error('username')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            </div>
            <div class="flex flex-col sm:space-y-3">
                <p class="text-xl">Password</p>
                <input type="password" name="password" class="@error('username') border-2 border-red-500 @enderror w-full rounded sm:px-3 sm:py-2 text-black" autocomplete="off" id="">
            @error('password')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            </div>
            <div class="flex flex-col sm:space-y-3">
            <a href="{{ route('register') }}" class="underline text-center transition duration-300 hover:text-purple-500">Belum punya akun?</a>
                <input type="submit" value="Login" class="rounded bg-purple-500 px-3 py-2 w-1/3 mx-auto transition duration-300 transform hover:scale-105 hover:bg-purple-600 cursor-pointer">
            </div>
        </form>
    </div>
@endsection