<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function index()
{
   
    // Date

    $provinsi = DB::table('provinsis') ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.id_provinsi')
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->groupBy('provinsis.id')
        ->get();
        $tanggal = Carbon::now()->format('D d-M-Y h:i:s');
           return view('frontend.index',compact('provinsi','tanggal'));
}

public function Indonesia(){
    $jumlah_positif = DB::table('kasuses')
                    ->select('kasuses.positif')
                    ->sum('kasuses.positif');

    $jumlah_sembuh = DB::table('kasuses')
                    ->select('kasuses.sembuh')
                    ->sum('kasuses.sembuh');

    $jumlah_meninggal = DB::table('kasuses')
                    ->select('kasuses.meninggal')
                    ->sum('kasuses.meninggal');

    return response([
                'success' => true,
                'data' => [
                'name' => 'Indonesia',
                'jumlah_positif'=> $positif,
                'jumlah_sembuh'=> $jumlah_sembuh,
                'jumlah_meninggal'=> $jumlah_meninggal,
                        ],
                                'message' => ' Berhasil!',

                    ]);

}
}