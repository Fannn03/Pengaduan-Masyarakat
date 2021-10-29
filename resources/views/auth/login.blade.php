@extends('templates.index')
@section('content')
    <div class="sm:container-md sm:w-1/2 sm:mx-auto sm:my-10 border p-10 font-sans flex flex-col sm:space-y-5 text-gray-100 rounded-md">
        <h1 class="sm:text-2xl border-b pb-3">Login Page</h1>
        <form action="" method="POST" class="flex flex-col sm:px-3 sm:space-y-5">
            <div class="flex flex-col sm:space-y-3">
                <p class="text-xl">Username</p>
                <input type="text" name="username" class="w-full border rounded sm:px-3 sm:py-2 text-black" autofocus autocomplete="off" id="">
            </div>
            <div class="flex flex-col sm:space-y-3">
                <p class="text-xl">Password</p>
                <input type="password" name="password" class="w-full border rounded sm:px-3 sm:py-2 text-black" autocomplete="off" id="">
            </div>
            <div class="flex flex-col sm:space-y-3">
                <a href="" class="underline text-center transition duration-300 hover:text-purple-500">Sudah punya akun?</a>
                <input type="submit" value="Login" class="rounded bg-purple-500 px-3 py-2 w-1/3 mx-auto transition duration-300 transform hover:scale-105 hover:bg-purple-600 cursor-pointer">
            </div>
        </form>
    </div>
@endsection