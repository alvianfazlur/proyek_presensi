<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Matkul;
use \App\Models\Mahasiswa;
use \App\Models\Rekap;
class Presensi extends Model
{
    use HasFactory;
    public $with = ['matkul','rekap'];
    protected $guarded = ['id'];

    public function matkul(){
        return $this->belongsTo(Matkul::class,"matkul_id");
    }
    public function rekap(){
        return $this->hasMany(Rekap::class);
    }
}
