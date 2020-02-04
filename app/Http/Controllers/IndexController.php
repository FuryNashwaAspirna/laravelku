<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function pelajar(){
       
        $nama = 'Furry Caca';
        return view('Pelajar', ['nama' => $nama]);
    }
    
    
}
