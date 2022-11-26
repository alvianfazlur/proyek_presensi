<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Kelas;
use \App\Models\Dosen;
class Matkul extends Model
{
    use HasFactory;
    public $with = ['kelas','dosen'];

    public function kelas(){
        return $this->belongsTo(Kelas::class,"kelas_id");
    }
    public function dosen(){
        return $this->belongsTo(Dosen::class,"dosen_id");
    }
}
