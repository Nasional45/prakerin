<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{
    //Data Global
    public $data = [];
    public function global(){
        $response = Http::get('https://api.kawalcorona.com')->json();
        foreach($response as $data => $val){
            $raw = $val['attributes'];
            $res =[
                'Negara' => $raw['Country_Region'],
                'Reaktif' => $raw['Confirmed'],
                'Positif' => $raw['Recovered'],
                'Sembuh' => $raw['Deaths'],
            ];
            array_push ($this->data,$res);
        }
        $data = [
            'succes' => true,
            'data' => $this->data,
            'message' => 'Berhasil'
        ];
        return response()->json($data,200);
    }
    //Data Indonesia
        public function Indonesia(){
            $reaktif = DB::table('kasuses')
                            ->select('kasuses.reaktif')
                            ->sum('kasuses.reaktif');
    
            $positif = DB::table('kasuses')
                            ->select('kasuses.positif')
                            ->sum('kasuses.positif');
    
            $sembuh = DB::table('kasuses')
                            ->select('kasuses.sembuh')
                            ->sum('kasuses.sembuh');
    
            $meninggal = DB::table('kasuses')
                            ->select('kasuses.meninggal')
                            ->sum('kasuses.meninggal');
    
            return response([
                        'success' => true,
                        'data' => [
                        'name' => 'Indonesia',
                        'reaktif'=> $reaktif,
                        'positif'=> $positif,
                        'sembuh'=> $sembuh,
                        'meninggal'=> $meninggal,
                                ],
                                        'message' => ' Berhasil!',
    
                            ]);
    
        }
// Data Provinsi
public function provinsi1(){
    $allday = DB::table('provinsis')
    ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
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

    $today = DB::table('provinsis')
    ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('kotas','provinsis.id','=','kotas.id_provinsi')
    ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
    ->join('desas','kecamatans.id','=','desas.id_kecamatan')
    ->join('rws','desas.id','=','rws.id_desa')
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->whereDate('kasuses.tanggal',Carbon::today())
    ->groupBy('provinsis.id')
    ->get();
    $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
        $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
        $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
    // dd($provinsi);
    return response([
        'Success' => true,
        'Data' => [
                    'Hari Ini' => $today,
        'Data' => [
                    'Provinsi' => $allday,
        'Total' =>[
                    'Jumlah Reaktif' => $reaktif,
                    'Jumlah Positif' => $positif,
                    'Jumlah Sembuh' => $sembuh,
                    'Jumlah Meninggal' => $meninggal,
                ],
                'message' => ' Berhasil!',
            ],
        ],
    ]);

}
          public function provinsi2($id){

        $provinsi = DB::table('provinsis') 
        ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
        DB::raw('SUM(kasuses.reaktif) as reaktif'),
        DB::raw('SUM(kasuses.positif) as positif'),
        DB::raw('SUM(kasuses.sembuh) as sembuh'),
        DB::raw('SUM(kasuses.meninggal) as meninggal'))
        ->join('kotas','provinsis.id','=','kotas.id_provinsi')
        ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
        ->join('desas','kecamatans.id','=','desas.id_kecamatan')
        ->join('rws','desas.id','=','rws.id_desa')
        ->join('kasuses','rws.id','=','kasuses.id_rw')
        ->where('provinsis.id',$id)
        ->groupBy('provinsis.id','tanggal')
        ->first();
        $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
            $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
            $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
            $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
        // dd($provinsi);
        return response([
            'success' => true,
            'data' => $provinsi,
            'Total' =>[
                        'Jumlah Reaktif' => $reaktif,
                        'Jumlah Positif' => $positif,
                        'Jumlah Sembuh' => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                    ],
                    'message' => ' Berhasil!',

        ]);
    }
// Data Kota
public function kota1(){
    $allday = DB::table('kotas')
    ->select('kotas.kode_kota','kotas.nama_kota',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
    ->join('desas','kecamatans.id','=','desas.id_kecamatan')
    ->join('rws','desas.id','=','rws.id_desa')
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->groupBy('kotas.id')
    ->get();

    $today = DB::table('kotas')
    ->select('kotas.kode_kota','kotas.nama_kota',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
    ->join('desas','kecamatans.id','=','desas.id_kecamatan')
    ->join('rws','desas.id','=','rws.id_desa')
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->whereDate('kasuses.tanggal',Carbon::today())
    ->groupBy('kotas.id')
    ->get();
    $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
        $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
        $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
    // dd($provinsi);
    return response([
        'Success' => true,
        'Data' => [
                    'Hari Ini' => $allday,
        'Data' => [
                    'Kota' => $today,            
        'Total' =>[
                    'Jumlah Reaktif' => $reaktif,
                    'Jumlah Positif' => $positif,
                    'Jumlah Sembuh' => $sembuh,
                    'Jumlah Meninggal' => $meninggal,
                ],
                'message' => ' Berhasil!',
            ],
        ],
    ]);

}
        public function kota2($id){
            $kota = DB::table('kotas')
            ->select('kotas.kode_kota','kotas.nama_kota',
            DB::raw('SUM(kasuses.reaktif) as reaktif'),
            DB::raw('SUM(kasuses.positif) as positif'),
            DB::raw('SUM(kasuses.sembuh) as sembuh'),
            DB::raw('SUM(kasuses.meninggal) as meninggal'))
            ->join('kecamatans','kotas.id','=','kecamatans.id_kota')
            ->join('desas','kecamatans.id','=','desas.id_kecamatan')
            ->join('rws','desas.id','=','rws.id_desa')
            ->join('kasuses','rws.id','=','kasuses.id_rw')
            ->where('kotas.id',$id)
            ->groupBy('kotas.id','tanggal')
            ->get();
                $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
                $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
                $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
                $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
            // dd($provinsi);
            return response([
                'success' => true,
                'data' => [
                            'Hari Ini' => $kota,
                'Total' =>[
                            'Jumlah Reaktif' => $reaktif,
                            'Jumlah Positif' => $positif,
                            'Jumlah Sembuh' => $sembuh,
                            'Jumlah Meninggal' => $meninggal,
                        ],
                        'message' => ' Berhasil!',
                    ],
            ]);
    
        }
//Data Kecamatan
public function kecamatan1(){
    $allday = DB::table('kecamatans')
    ->select('kecamatans.nama_kecamatan',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('desas','kecamatans.id','=','desas.id_kecamatan')
    ->join('rws','desas.id','=','rws.id_desa')
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->groupBy('kecamatans.id')
    ->get();

    $today = DB::table('kecamatans')
    ->select('kecamatans.nama_kecamatan',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('desas','kecamatans.id','=','desas.id_kecamatan')
    ->join('rws','desas.id','=','rws.id_desa')
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->whereDate('kasuses.tanggal',Carbon::today())
    ->groupBy('kecamatans.id')
    ->get();    
        $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
        $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
        $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
    // dd($provinsi);
    return response([
        'Success' => true,
        'Data' => [
                    'Hari Ini' => $today,
        'Data' => [
                    'Kecamatan' => $allday,            
        'Total' =>[
                    'Jumlah Reaktif' => $reaktif,
                    'Jumlah Positif' => $positif,
                    'Jumlah Sembuh' => $sembuh,
                    'Jumlah Meninggal' => $meninggal,
                ],
                'message' => ' Berhasil!',
            ],
        ],
    ]);

}
        public function kecamatan2($id){
            $kecamatan = DB::table('kecamatans')
            ->select('kecamatans.nama_kecamatan',
            DB::raw('SUM(kasuses.reaktif) as reaktif'),
            DB::raw('SUM(kasuses.positif) as positif'),
            DB::raw('SUM(kasuses.sembuh) as sembuh'),
            DB::raw('SUM(kasuses.meninggal) as meninggal'))
            ->join('desas','kecamatans.id','=','desas.id_kecamatan')
            ->join('rws','desas.id','=','rws.id_desa')
            ->join('kasuses','rws.id','=','kasuses.id_rw')
            ->where('kecamatans.id',$id)
            ->groupBy('kecamatans.id','tanggal')
            ->get();
                $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
                $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
                $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
                $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
            // dd($provinsi);
            return response([
                'success' => true,
                'data' => [
                            'Hari Ini' => $kecamatan,
                'Total' =>[
                            'Jumlah Reaktif' => $reaktif,
                            'Jumlah Positif' => $positif,
                            'Jumlah Sembuh' => $sembuh,
                            'Jumlah Meninggal' => $meninggal,
                        ],
                        'message' => ' Berhasil!',
                    ],
            ]);
    
        }

//Data Desa
public function desa1(){
    $allday = DB::table('desas')
    ->select('desas.nama_desa',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('rws','desas.id','=','rws.id_desa')
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->groupBy('desas.id')
    ->get();

    $today = DB::table('desas')
    ->select('desas.nama_desa',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('rws','desas.id','=','rws.id_desa')
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->whereDate('kasuses.tanggal',Carbon::today())
    ->groupBy('desas.id')
    ->get();
        $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
        $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
        $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
    // dd($provinsi);
    return response([
        'Success' => true,
        'Data' => [
                    'Hari Ini' => $today,
        'Data' => [
                    'Kecamatan' => $allday,      
        'Total' =>[
                    'Jumlah Reaktif' => $reaktif,
                    'Jumlah Positif' => $positif,
                    'Jumlah Sembuh' => $sembuh,
                    'Jumlah Meninggal' => $meninggal,
                ],
                'message' => ' Berhasil!',
            ],
        ],
    ]);

}public function desa2($id){
    $desa = DB::table('desas')
    ->select('desas.nama_desa',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('rws','desas.id','=','rws.id_desa')
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->where('desas.id',$id)
    ->groupBy('desas.id','tanggal')
    ->get();
        $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
        $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
        $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
    // dd($provinsi);
    return response([
        'success' => true,
        'data' => [
                    'Hari Ini' => $desa,
        'Total' =>[
                    'Jumlah Reaktif' => $reaktif,
                    'Jumlah Positif' => $positif,
                    'Jumlah Sembuh' => $sembuh,
                    'Jumlah Meninggal' => $meninggal,
                ],
                'message' => ' Berhasil!',
            ],
    ]);

}

// Data rw
 public function rw1(){
    $allday = DB::table('rws')
    ->select('rws.nama_rw',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->groupBy('rws.id','tanggal')
    ->get();

    $today = DB::table('rws')
    ->select('rws.nama_rw',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->whereDate('kasuses.tanggal',Carbon::today())
    ->groupBy('rws.id','tanggal')
    ->get();
         $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
        $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
        $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
    // dd($provinsi);
    return response([
        'Success' => true,
        'Data' => [
                    'Hari Ini' => $today,
        'Data' => [
                    'Rw' => $allday,
        'Total' =>[
                    'Jumlah Reaktif' => $reaktif,
                    'Jumlah Positif' => $positif,
                    'Jumlah Sembuh' => $sembuh,
                    'Jumlah Meninggal' => $meninggal,
                ],
                'Message' => ' Berhasil!',
            ],
        ],
    ]);

}
public function rw2($id){
    $rw = DB::table('rws')
    ->select('rws.nama_rw',
    DB::raw('SUM(kasuses.reaktif) as reaktif'),
    DB::raw('SUM(kasuses.positif) as positif'),
    DB::raw('SUM(kasuses.sembuh) as sembuh'),
    DB::raw('SUM(kasuses.meninggal) as meninggal'))
    ->join('kasuses','rws.id','=','kasuses.id_rw')
    ->where('rws.id',$id)
    ->groupBy('rws.id','tanggal')
    ->get();
        $reaktif = DB::table('rws')->select('kasuses.reaktif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.reaktif');
        $positif = DB::table('rws')->select('kasuses.positif')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.positif');
        $sembuh = DB::table('rws')->select('kasuses.sembuh')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')->select('kasuses.meninggal')->join('kasuses','rws.id','=','kasuses.id_rw')->sum('kasuses.meninggal');
    // dd($provinsi);
    return response([
        'success' => true,
        'data' => [
                    'Hari Ini' => $rw,
        'Total' =>[
                    'Jumlah Reaktif' => $reaktif,
                    'Jumlah Positif' => $positif,
                    'Jumlah Sembuh' => $sembuh,
                    'Jumlah Meninggal' => $meninggal,
                ],
                'message' => ' Berhasil!',
            ],
    ]);

}
        
    //Data reaktif positif sembuh meninggal
    public function reaktif(){
        $reaktif = DB::table('kasuses')->select('kasuses.reaktif')->sum('kasuses.reaktif');
        return response([
            'success' => true,
            'data' => [
                'name' => 'Total Reaktif',
                'value'=> $reaktif,
            ],
                    'message' => ' Berhasil!',

        ]);
    }
    public function positif(){
        $positif = DB::table('kasuses')->select('kasuses.positif')->sum('kasuses.positif');
        return response([
            'success' => true,
            'data' => [
                'name' => 'Total Positif',
                'value' => $positif,
            ],
                    'message' => ' Berhasil!',

        ]);
    }
    public function sembuh(){
        $sembuh = DB::table('kasuses')->select('kasuses.sembuh')->sum('kasuses.sembuh');
        return response([
            'success' => true,
            'data' => [
                        'name' => 'Total Sembuh',
                        'value' => $sembuh,
            ],
                    'message' => ' Berhasil!',

        ]);
    }
    public function meninggal(){
        $meninggal = DB::table('kasuses')->select('kasuses.meninggal')->sum('kasuses.meninggal');
        return response([
            'success' => true,
            'data' => [
                        'name' => 'Total Meninggal',
                        'value' => $meninggal,
            ],
                    'message' => ' Berhasil!',

        ]);
    }

}