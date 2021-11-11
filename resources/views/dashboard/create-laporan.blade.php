@extends('templates.index')
@section('content')
<div class="container border mx-auto flex flex-col rounded-md p-5 space-y-3 font-mono">
    <h1 class="text-xl text-gray-100 pb-2 border-b">Buat laporan pengaduan</h1>
    <form action="" method="POST" class="text-gray-100 flex flex-col space-y-3 px-3">
        @csrf
        <div class="flex flex-row">
            {{-- left side --}}
            <div class="flex flex-col w-1/2 space-y-3">
                <div class="flex flex-col space-y-3">
                    <p class="text-xl">Judul Laporan</p>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="@error('judul_laporan') border-red-500 border-2 @enderror w-full px-3 py-1 rounded sm:px-3 sm:py-2 text-black"
                        autofocus autocomplete="off" id="">
                    @error('judul_laporan')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col space-y-3">
                    <p class="text-xl">Foto Laporan</p>
                    <label class="bg-white rounded w-2/3 text-black flex justify-between group cursor-pointer hover:bg-purple-500 transition duration-300">
                        <div class="px-3 py-2 group-hover:text-white transition duration-300">
                            <input type="file" name="" class="hidden" id="imgInp">
                            Masukan file gambar
                        </div>
                        <div
                            class="bg-purple-500 px-8 py-2 rounded-sm text-white transition duration-300 group-hover:bg-white group-hover:text-purple-500">
                            <i class="fas fa-upload"></i>
                        </div>
                    </label>
                </div>
                <div class="flex flex-col space-y-3">
                    <p class="text-xl">Isi Laporan</p>
                    <textarea name="" class="text-black rounded-md p-3 w-full" rows="3"></textarea>
                </div>
                <div class="flex flex-row space-x-3">
                    <input type="submit" value="Kirim Laporan" class="text-white bg-blue-500 py-3 px-3 transition duration-300 hover:bg-blue-700 cursor-pointer rounded-md">
                    <a href="{{ route('index-dashboard') }}" class="text-white bg-red-500 py-3 px-2 transition duration-300 hover:bg-red-700 rounded-md">Kembali</a>
                </div>
            </div>
            {{-- right side --}}
            <div class="flex flex-1 justify-center">
                <img src="#" id='blah' class="rounded-md" alt="">
            </div>
        </div>
    </form>
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
