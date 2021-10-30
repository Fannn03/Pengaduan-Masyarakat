@extends('templates.index')

@section('content')
    <div class="container text-white p-5 border rounded-md space-y-5">
        <div class="flex flex-row border-b pb-3">
            <h1 class="text-xl px-3 py-2">Halaman Dashboard</h1>
        </div>
        <div class="flex flex-row justify-between">
            <h1 class="text-xl px-3 py-2">Laporan {{ Auth::user()->username }}</h1>
            <a href="" class="bg-purple-500 px-3 py-2 rounded-md transform transition duration-300 hover:bg-purple-600 hover:scale-105">Buat laporan</a>
        </div>
        <!-- component -->
<table class="min-w-full border-collapse block sm:table">
    <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">No</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal dibuat</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
        </tr>
    </thead>
    <?php $no = 1; ?>
    <tbody class="block md:table-row-group">
        <tr class="bg-gray-700 border border-grey-500 md:border-none block md:table-row">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>{{ $no }}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>jrios1</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>jrios@icloud.com</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>582-3X2-6233</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
            </td>
        </tr>		
    </tbody>
</table>
    </div>
@endsection