<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $fileName = Auth::user()->username . "-" . uniqid() . "." . "-" . $request->judul_laporan . "." . $extension;

        Laporan::create([
            'judul_laporan' => $request->judul_laporan,
            'foto_laporan' => $fileName,
            'nama_pelapor' => Auth::user()->nama,
            'username' => Auth::user()->username,
            'status' => 0,
            'isi_laporan' => $request->isi_laporan,
            'tanggal_dibuat' => date(now()),
        ]);

        $request->foto_laporan->storeAs('laporan', $fileName, 'public');

        return redirect()->route('index-dashboard')->with('laporan', 'Laporan anda berhasil dikirim, harap menunggu hingga di respond oleh petugas');

    }

}
