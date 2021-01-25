<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    public function Kecamatan(){
        return $this->belongsTo('App\Model\Kecamatan','id_kecamatan');
    }
    public function Rw(){
        return $this->hasMany('App\Model\Rw','id_desa');
    } 
}
