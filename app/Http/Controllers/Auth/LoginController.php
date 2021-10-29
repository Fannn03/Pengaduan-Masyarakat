<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function view(){
        return view('auth.login');
    }

    public function login(Request $request){

        $rules = [
            'username' => 'required|string|min:4|max:12',
            'password' => 'required|min:5|max:16',
        ];

        $messages = [
            'required' => 'Data :attribute tidak boleh kosong',
            'string' => 'Data :attribute harus merupakan karakter',
            'min' => 'Data :attribute minimal :min karakter',
            'max' => 'Data :attribute maksimal :max karakter',
        ];

        $validator = Validator::make($request->all(), $rules, $messages)->validate();

        if (Auth::attempt($validator)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }else{
            return redirect()->route('login')->withInput()->with('login', 'Username atau password salah');
        }

    }

}
