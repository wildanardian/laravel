<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function register(){
        return view('form');
    }

    public function index(){
        return view('index');
    }

    public function selamat_datang(Request $request){
        // dd($request->all());
        $nama_depan = $request['first-name'];
        $nama_belakang = $request['last-name'];

        $nama_lengkap = "$nama_depan $nama_belakang";

        return view('selamat-datang', compact('nama_lengkap'));
    }

}
