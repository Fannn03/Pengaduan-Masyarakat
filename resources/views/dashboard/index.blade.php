@extends('templates.index')

@section('content')
<div class="container sm:mx-auto text-white p-5 border rounded-md space-y-5">
    <div class="flex flex-row border-b pb-3">
        <h1 class="text-xl px-3 py-2">Halaman Dashboard</h1>
    </div>
    <div class="flex flex-row justify-between">
        <h1 class="text-xl px-3 py-2">Laporan {{ Auth::user()->username }}</h1>
        @if (Auth::user()->jabatan == 'masyarakat')
        <a href=""
            class="bg-purple-500 px-3 py-2 rounded-md transform transition duration-300 hover:bg-purple-600 hover:scale-105">Buat
            laporan</a>
        @endif
    </div>
    <!-- component -->
    @if (Auth::user()->jabatan == 'masyarakat')
        <x-dashboard-masyarakat></x-dashboard-masyarakat>
    @endif
</div>
@endsection
