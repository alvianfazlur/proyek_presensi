<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Dosen;
use \App\Models\Kelas;
use \App\Models\Mahasiswa;
use \App\Models\Matkul;
use \App\Models\Presensi;
class IndexController extends Controller
{
    public function home(){
        return view('login.login');
    }
    public function homeAdmin(){
        $dosen = Dosen::get();
        return view('admin.homeAdmin',['dosen' => $dosen]);
    }
    public function adminMhs(){
        $mahasiswa = Mahasiswa::get();
        return view('admin.adminMhs',['mahasiswa' => $mahasiswa]);
    }
    public function hapusDosen($id){
	    // menghapus data todolist berdasarkan id yang dipilih
	    DB::table('dosens')->where('id',$id)->delete();
		
	    // alihkan halaman ke halaman todolist
	    return redirect('/index/admin/dosen');
    }
    public function hapusMhs($id){
	    // menghapus data todolist berdasarkan id yang dipilih
	    DB::table('mahasiswas')->where('id',$id)->delete();
		
	    // alihkan halaman ke halaman admin mahasiswa
	    return redirect('/index/admin/mahasiswa');
    }
    public function editMhs($id){
	    $mahasiswa= Mahasiswa::where('id',$id)->get();
		
	    // alihkan halaman ke halaman todolist
	    return view('admin.editMhs',['mahasiswa' => $mahasiswa]);
    }
    public function tambahDosen(){
	    // memanggil view tambah
	    return view('admin.tambahDosen');
    }
    public function tambahMhs(){
	    // memanggil view tambah
	    return view('admin.tambahMahasiswa');
    }
    public function updateMhs(Request $request){

        Mahasiswa::where('id',$request->id)->update([
            'nrp' => $request->nrp,
            'nama_mahasiswa' => $request->nama,
            'alamat' => $request->alamat,
            'kelas' => $request->kelas,
            'no_tlp' => $request->no_tlp
            
        ]);
	// alihkan halaman
	return redirect('index/admin/mahasiswa');
    }

    public function logout(){
        return view('auth.login');
    }
}
