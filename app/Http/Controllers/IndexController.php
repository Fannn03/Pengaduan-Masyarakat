<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $data = [
            'title' => 'Index Page'
        ];

        return view('index')->with($data);
        
    }
}
