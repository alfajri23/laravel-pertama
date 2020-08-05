<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form (){
        return view ('form');
    }

    public function tampil (Request $request){
       
       $nm = $request["nm_dpn"];
       $mn = $request["nm_blkg"];
       $nama = "$nm $mn";
       return view('pertama', compact('nama'));
    }
}
