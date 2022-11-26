<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Kelas;
class Mahasiswa extends Model
{
    use HasFactory;
    public $with = ['kelas'];

    public function kelas(){
        return $this->belongsTo(Kelas::class,"kelas_id");
    }
}
