<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Matkul;
class Dosen extends Model
{
    use HasFactory;
    public $with = ['matkul'];

    public function matkul(){
        return $this->belongsTo(Matkul::class,"matkul_id");
    }
}
