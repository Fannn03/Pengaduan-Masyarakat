<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    public function view(){
        return view('auth.register');
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

        if ($validator) {
            return "benarrr";
        }else{
            return redirect(route('register'));
        }

    }
}
