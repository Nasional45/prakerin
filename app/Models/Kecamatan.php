<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public function Kota(){
        return $this->belongsTo('App\Model\Kota','id_kota');
    }
    public function Desa(){
        return $this->hasMany('App\Model\Desa','id_desa');
    } 
}
