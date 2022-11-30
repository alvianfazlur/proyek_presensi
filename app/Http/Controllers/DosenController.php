<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Presensi;
use \App\Models\Matkul;
use \App\Models\Rekap;

class DosenController extends Controller
{
    public function home(){
        $matkul = Matkul::get();
        $presensi = Presensi::get();
        return view('dosen.homeDosen',['matkul' => $matkul, 'presensi' => $presensi]);
    }
    public function bukaabsen($id){
        $matkul = Matkul::where('id',$id)->get();
        return view('dosen.BukaAbsen',['matkul' => $matkul]);
    }
    public function view(){
        $rekap = Rekap::get();
        return view('dosen.lihatabsen',['rekap' => $rekap]);
    }
    public function store(Request $request){
        // insert data ke table todolist
        Presensi::create([
            'matkul_id' => $request->id_matkul
        ]);       
	
	return redirect('/presensi');
    }
}
