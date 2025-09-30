<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama ="", $npm ="", $kelas=""){
        $data = [
            'Nama'=> $nama,
            'NPM'=> $npm,
            'Kelas'=> $kelas
        ];

        return view('profile', $data);
    }
}