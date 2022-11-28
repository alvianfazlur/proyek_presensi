<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Presensi;
use \App\Models\Rekap;

class MahasiswaController extends Controller
{
    public function home(){
        $presensi = Presensi::get();
        return view('mahasiswa.homeMhs',['presensi' => $presensi]);
    }
}
