<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateLaporan extends Controller
{

    public function view(){
        $data = [
            'title' => 'Create Laporan',
        ];
        return view('dashboard.create-laporan')->with($data);
    }
}
