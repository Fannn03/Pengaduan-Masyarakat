@extends('templates.index')
@section('content')
    <div class="container-md sm:p-24 p-10 flex flex-col space-y-5 text-gray-100 bg-gray-700">
        <h1 class="sm:text-4xl text-2xl">
            Solusi utama menangani masalah masyarakat
        </h1>
        <p class="sm:text-xl sm:w-1/2 text-gray-500">
            Mengatasi berbagai keluhan masalah masyarakat dan kejahatan kecil seperti perbaikan jalan, kemalingan, perbaikan saluran air, hingga
            masalah lainnya.
        </p>
    </div>
    <div class="sm:container mx-auto p-10 font-sans text-gray-100 sm:my-36 sm:space-y-24 flex justify-center flex-col">
        {{-- Tentang --}}
        <div class="flex flex-col justify-center text-center sm:space-y-5">
            <h1 class="text-4xl group hover:text-purple-500 transition duration-300 cursor-pointer">Layanan Kami</h1>
            <p class="text-2xl text-gray-500 sm:w-1/2 sm:mx-auto group hover:text-purple-500 transition duration-300 cursor-pointer">
                100% usaha kami adalah memberikan pelayanan terbaik untuk keluhan dan pengaduan masalah anda.
            </p>
        </div>
        {{-- end Tentang --}}
        {{-- Layanan --}}
        <div class="flex sm:flex-row sm:flex-wrap sm:justify-center gap-4 font-sans sm:w-full">
            <div class="flex flex-col sm:w-1/4 text-center sm:space-y-5 p-5 cursor-pointer transition transform duration-300 group hover:bg-purple-500 hover:scale-105 bg-gray-900 rounded-md">
                <h1 class="border-b border-gray-500 sm:text-xl pb-2 group cursor-pointer">Perbaikan Jalan</h1>
                <p class="text-gray-500 px-5 group-hover:text-gray-100 group cursor-pointer">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, suscipit! Unde, molestias. Laboriosam aperiam, magnam reiciendis
                </p>
            </div>
            <div class="flex flex-col sm:w-1/4 text-center sm:space-y-5 p-5 cursor-pointer transition transform duration-300 group hover:bg-purple-500 hover:scale-105 bg-gray-900 rounded-md">
                <h1 class="border-b border-gray-500 sm:text-xl pb-2 group cursor-pointer">Perbaikan Jalan</h1>
                <p class="text-gray-500 px-5 group-hover:text-gray-100 group cursor-pointer">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, suscipit! Unde, molestias. Laboriosam aperiam, magnam reiciendis
                </p>
            </div><div class="flex flex-col sm:w-1/4 text-center sm:space-y cursor-pointer-5 p-5 transition transform duration-300 group hover:bg-purple-500 hover:scale-105 bg-gray-900 rounded-md">
                <h1 class="border-b border-gray-500 sm:text-xl pb-2 group cursor-pointer">Perbaikan Jalan</h1>
                <p class="text-gray-500 px-5 group-hover:text-gray-100 group cursor-pointer">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, suscipit! Unde, molestias. Laboriosam aperiam, magnam reiciendis
                </p>
            </div><div class="flex flex-col sm:w-1/4 text-center sm:space-y cursor-pointer-5 p-5 transition transform duration-300 group hover:bg-purple-500 hover:scale-105 bg-gray-900 rounded-md">
                <h1 class="border-b border-gray-500 sm:text-xl pb-2 group cursor-pointer">Perbaikan Jalan</h1>
                <p class="text-gray-500 px-5 group-hover:text-gray-100 group cursor-pointer">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, suscipit! Unde, molestias. Laboriosam aperiam, magnam reiciendis
                </p>
            </div><div class="flex flex-col sm:w-1/4 text-center sm:space-y cursor-pointer-5 p-5 transition transform duration-300 group hover:bg-purple-500 hover:scale-105 bg-gray-900 rounded-md">
                <h1 class="border-b border-gray-500 sm:text-xl pb-2 group cursor-pointer">Perbaikan Jalan</h1>
                <p class="text-gray-500 px-5 group-hover:text-gray-100 group cursor-pointer">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, suscipit! Unde, molestias. Laboriosam aperiam, magnam reiciendis
                </p>
            </div>
            
        </div>

    </div>
@endsection