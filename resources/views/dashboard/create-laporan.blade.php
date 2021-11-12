@extends('templates.index')
@section('content')
<div class="container border mx-auto rounded-md p-5 text-white">
    <h1 class="text-xl border-b p-3 block">Buat laporan pengaduan</h1>
    <div class="flex flex-row">
        <form action="" method="post" class="w-1/2 p-5 space-y-5" enctype="multipart/form-data">
            @csrf
            <p class="text-xl">Judul Laporan</p>
            <input type="text" name="judul_laporan" value="{{ old('judul_laporan') }}"
                class="@error('judul_laporan') border-red-500 border-2 @enderror w-full px-3 py-1 rounded sm:px-3 sm:py-2 text-black"
                autofocus autocomplete="off" id="">
            @error('judul_laporan')
            <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror
            <div class="flex flex-col space-y-3">
                <p class="text-xl">Foto Laporan</p>
                <label
                    class="bg-white rounded w-2/3 text-black flex justify-between group cursor-pointer @error('foto_laporan') border-red-500 border-2 @enderror hover:bg-purple-500 transition duration-300">
                    <div class="px-3 py-2 group-hover:text-white transition duration-300">
                        <input type="file" name="foto_laporan" class="hidden" id="imgInp">
                        Masukan file gambar
                    </div>
                    <div
                        class="bg-purple-500 px-8 py-2 rounded-sm text-white transition duration-300 group-hover:bg-white group-hover:text-purple-500">
                        <i class="fas fa-upload"></i>
                    </div>
                </label>
                @error('foto_laporan')
                <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-3">
                <p class="text-xl">Isi Laporan</p>
                <textarea name="isi_laporan"
                    class="text-black rounded-md p-3 w-full @error('isi_laporan') border-red-500 border-2 @enderror"
                    rows="3">{{ old('isi_laporan') }}</textarea>
                @error('isi_laporan')
                <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-row space-x-3">
                <input type="submit" value="Kirim Laporan"
                    class="text-white bg-blue-500 py-3 px-3 transition duration-300 hover:bg-blue-700 cursor-pointer rounded-md">
                <a href="{{ route('index-dashboard') }}"
                    class="text-white bg-red-500 py-3 px-2 transition duration-300 hover:bg-red-700 rounded-md">Kembali</a>
            </div>
        </form>
        <div class="flex flex-1 justify-center">
            <img src="#" id='blah' class="rounded-md h-2/3 my-auto" alt="">
        </div>
    </div>
</div>
@endsection
@push('javascript')
<script>

    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

</script>
@endpush
