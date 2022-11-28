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
    public $with = ['presensi'];
    protected $guarded = ['id'];
    public function presensi(){
        return $this->belongsTo(Presensi::class,"presensi_id");
    }
}
