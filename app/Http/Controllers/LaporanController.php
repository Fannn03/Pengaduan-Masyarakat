<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class LaporanController extends Controller
{

    public function view(){
        $data = [
            'title' => 'Create Laporan',
        ];
        return view('dashboard.create-laporan')->with($data);
    }

    public function store(Request $request){

        $rules = [
            'judul_laporan' => 'required|string|min:5|max:50',
            'foto_laporan' => 'required|mimes:png,jpg,jpeg|min:200|max:20000',
            'isi_laporan' => 'required|string|min:20'
        ];

        $messages = [
            'required' => 'Data :attribute tidak boleh kosong.',
            'string' => 'Data :attribute harus merupakan karakter',
            'min' => [
                'string' => 'Data :attribute tidak boleh kurang dari :min karakter',
                'file' => 'Data :attribute tidak boleh kurang dari :min Kb' 
            ],
            'max' => [
                'string' => 'Data :attribute tidak boleh lebih dari :max karakter',
                'file' => 'Data :attribute tidak boleh lebih dari :max Kb' 
            ],
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $extension = $request->foto_laporan->extension();
        $fileName = Auth::user()->username . "-" . uniqid() . "." . "-" . strtolower(Str::slug($request->judul_laporan, '-')) . "." . $extension;

        Laporan::create([
            'judul_laporan' => $request->judul_laporan,
            'foto_laporan' => $fileName,
            'slug' => Auth::user()->username . '-' . Str::random(40) . '.' . now(),
            'nama_pelapor' => Auth::user()->nama,
            'username' => Auth::user()->username,
            'status' => 0,
            'isi_laporan' => $request->isi_laporan,
            'tanggal_dibuat' => date(now()),
        ]);

        $request->foto_laporan->storeAs('images/laporan', $fileName, 'public');

        return redirect()->route('index-dashboard')->with('laporan', 'Laporan anda berhasil dikirim, harap menunggu hingga di respond oleh petugas');

    }

    public function edit($slug){

        $getData = Laporan::where('slug', $slug)->first();

        if ($getData == null) {
            return redirect()->route('index-dashboard');
        }

        $data = [
            'laporan' => $getData,
            'title' => 'Edit Laporan',
        ];
        return view('dashboard.edit-laporan')->with($data);

    }

    public function update(Request $request, $slug){

        $rules = [
            'judul_laporan' => 'required|string|min:5|max:50',
            'foto_laporan' => 'mimes:png,jpg,jpeg|min:200|max:20000',
            'isi_laporan' => 'required|string|min:20'
        ];

        $messages = [
            'required' => 'Data :attribute tidak boleh kosong.',
            'string' => 'Data :attribute harus merupakan karakter',
            'min' => [
                'string' => 'Data :attribute tidak boleh kurang dari :min karakter',
                'file' => 'Data :attribute tidak boleh kurang dari :min Kb' 
            ],
            'max' => [
                'string' => 'Data :attribute tidak boleh lebih dari :max karakter',
                'file' => 'Data :attribute tidak boleh lebih dari :max Kb' 
            ],
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        $data = Laporan::where('slug', $slug)->first();

        if (!empty($request->foto_laporan)) {
            
            Storage::delete('public/images/laporan/' . $data->foto_laporan);
            $extension = $request->foto_laporan->extension();
            $fileName = Auth::user()->username . "-" . uniqid() . "." . "-" . strtolower(Str::slug($request->judul_laporan, '-')) . "." . $extension;
            $request->foto_laporan->storeAs('images/laporan', $fileName, 'public');

        }else{
            $fileName = $data->foto_laporan;
        }
        Laporan::where('slug', $slug)->update([
            'judul_laporan' => $request->judul_laporan,
            'foto_laporan' => $fileName,
            'isi_laporan' =>  $request->isi_laporan,
            'tanggal_diedit' => date(now())
        ]);

        return redirect()->route('index-dashboard')->with('laporan', 'Laporan anda berhasil diedit');

    }

}
