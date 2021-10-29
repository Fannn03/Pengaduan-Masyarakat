<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function view(){

        $data = [
            'title' => 'Register Page'
        ];

        return view('auth.register')->with($data);

    }

    public function store(Request $request){

        $rules = [
            'nama' => 'required|string|max:255',
            'username' => 'required|string|min:4|max:12|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5|max:16|string|same:konfirmasi_password',
        ];

        $messages = [
            'required' => 'Data :attribute tidak boleh kosong',
            'string' => 'Data :attribute harus merupakan karakter',
            'email' => 'Data :attribute harus benar',
            'unique' => 'Data :attribute sudah dipakai',
            'min' => 'Data :attribute minimal :min karakter',
            'max' => 'Data :attribute maksimal :max karakter',
            'same' => 'Data :attribute harus sama dengan :other'
        ];

        $validator = Validator::make($request->all(), $rules, $messages)->validate();

        if (!$validator) {
            return redirect(route('register'));   
        }

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jabatan' => 'masyarakat',
            'aktivasi' => false,
        ]);

        return redirect(route('login'))->with('register', 'Akun anda berhasil dibuat, silahkan cek email anda untuk aktivasi akun');

    }
}
