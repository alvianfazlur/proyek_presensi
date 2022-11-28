<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Matkul;
use \App\Models\Mahasiswa;
use \App\Models\Presensi;

class Rekap extends Model
{
    use HasFactory;
    public $with = ['matkul','mahasiswa','presensi'];
    protected $guarded = ['id'];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class,"mahasiswa_nrp");
    }
    public function presensi(){
        return $this->belongsTo(Presensi::class,"presensi_id");
    }
}
