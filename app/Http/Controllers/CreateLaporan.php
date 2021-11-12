<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CreateLaporan extends Controller
{

    public function view(){
        $data = [
            'title' => 'Create Laporan',
        ];
        return view('dashboard.create-laporan')->with($data);
    }

    public function store(Request $request){

        $rules = [
            'judul_laporan' => 'required|string|min:5|max:24',
            'foto_laporan' => 'required|mimes:png,jpg,jpeg|min:5|max:20',
            'isi_laporan' => 'required|string|min:20'
        ];

        $messages = [
            'required' => 'Data :attribute tidak boleh kosong.',
            'string' => 'Data :attribute harus merupakan karakter',
            'min' => [
                'string' => 'Data :attribute tidak boleh kurang dari :min karakter',
                'file' => 'Data :attribute tidak boleh kurang dari :min Mb' 
            ],
            'max' => [
                'string' => 'Data :attribute tidak boleh lebih dari :max karakter',
                'file' => 'Data :attribute tidak boleh lebih dari :max Mb' 
            ],
        ];

        Validator::make($request->all(), $rules, $messages)->validate();

        

    }

}
