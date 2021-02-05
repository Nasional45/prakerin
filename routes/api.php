<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//ROUTE ProvinsiController
// Route::get('provinsi',[ProvinsiController::class, 'index']);
// Route::post('provinsi',[ProvinsiController::class, 'store']);
// Route::get('provinsi/{id?}',[ProvinsiController::class, 'show']);
// Route::delete('provinsi/{id?}',[ProvinsiController::class, 'destroy']);


//ROUTE ApiController
// Data Global
Route::get('global/', [ApiController::class, 'global']);

// Data Indonesia
Route::get('indonesia/', [ApiController::class, 'indonesia']);

//Data Provinsi
Route::get('provinsi1/',[ApiController::class, 'provinsi1']);
Route::get('provinsi2/{id}',[ApiController::class, 'provinsi2']);

//Data Kota
Route::get('kota1/',[ApiController::class, 'kota1']);
Route::get('kota2/{id}',[ApiController::class, 'kota2']);

//Data Kecamatan
Route::get('kecamatan1/',[ApiController::class, 'kecamatan1']);
Route::get('kecamatan2/{id}',[ApiController::class, 'kecamatan2']);

//Data Desa
Route::get('desa1/',[ApiController::class, 'desa1']);
Route::get('desa2/{id}',[ApiController::class, 'desa2']);

//Data Rw
Route::get('rw1/',[ApiController::class, 'rw1']);
Route::get('rw2/{id}',[ApiController::class, 'rw2']);



//Data reaktif positif sembuh meninggal
Route::get('reaktif', [ApiController::class, 'reaktif']);
Route::get('positif', [ApiController::class, 'positif']);
Route::get('sembuh', [ApiController::class, 'sembuh']);
Route::get('meninggal', [ApiController::class, 'meninggal']);