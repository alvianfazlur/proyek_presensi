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
    public function absen(Request $request){
        // insert data
        Rekap::create([
            'presensi_id' => $request->id_presensi,
            'is_hadir' => 1
        ]);       
	
	return redirect('/mahasiswa')->with('message', 'Presensi Berhasil!');
    }
    public function dashboard(){
        return view('mahasiswa.presensiberhasil');
    }
}
