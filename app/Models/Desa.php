<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Kecamatan;
use App\Model\Rw;
class Desa extends Model
{
    public function Kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan','id_kecamatan');
    }
    public function Rw(){
        return $this->hasMany('App\Models\Rw','id_rw');
    } 
}
