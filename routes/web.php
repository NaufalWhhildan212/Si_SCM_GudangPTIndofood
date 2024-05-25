<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PengirimanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RuteController;
use App\Http\Controllers\TrukController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('Dashboard', function () {
    return view('Layouts/Dashboard');
});
//Crud Pegawai
Route::get('/Pegawai',[PegawaiController::class,'index']);
Route::get('/Pegawai-Entry',[PegawaiController::class,'create']);
Route::post('/Pegawai-proses',[PegawaiController::class,'store']);
Route::get('/Pegawai-Edit/{id}',[PegawaiController::class,'edit']);
Route::post('/Pegawai-Update/{id}',[PegawaiController::class,'update']);
Route::get('/Pegawai-Delete/{id}',[PegawaiController::class,'destroy']);
//Mencetak Data Pegawai
Route::get('/Pegawai-Cetak',[PegawaiController::class,'downloadpdf']);

//Crud Supir
Route::get('/Supir',[SupirController::class,'index']);
Route::get('/Supir-Entry',[SupirController::class,'create']);
Route::post('/Supir-proses',[SupirController::class,'store']);
Route::get('/Supir-Edit/{id}',[SupirController::class,'edit']);
Route::post('/Supir-Update/{id}',[SupirController::class,'update']);
Route::get('/Supir-Delete/{id}',[SupirController::class,'destroy']);

//Mencetak Data Supir
Route::get('/Supir-Cetak',[SupirController::class,'downloadpdf']);

//Crud Supir
Route::get('/Gudang',[GudangController::class,'index']);
Route::get('/Gudang-Entry',[GudangController::class,'create']);
Route::post('/Gudang-proses',[GudangController::class,'store']);
Route::get('/Gudang-Edit/{id}',[GudangController::class,'edit']);
Route::post('/Gudang-Update/{id}',[GudangController::class,'update']);
Route::get('/Gudang-Delete/{id}',[GudangController::class,'destroy']);

//Mencetak Data Gudang
Route::get('/Gudang-Cetak',[GudangController::class,'downloadpdf']);

//Crud Barang
Route::get('/Barang',[BarangController::class,'index']);
Route::get('/Barang-Entry',[BarangController::class,'create']);
Route::post('/Barang-proses',[BarangController::class,'store']);
Route::get('/Barang-Edit/{id}',[BarangController::class,'edit']);
Route::post('/Barang-Update/{id}',[BarangController::class,'update']);
Route::get('/Barang-Delete/{id}',[BarangController::class,'destroy']);

//Mencetak Data Barang
Route::get('/Barang-Cetak',[BarangController::class,'downloadpdf']);


//Crud Outlet
Route::get('/Outlet',[OutletController::class,'index']);
Route::get('/Outlet-Entry',[OutletController::class,'create']);
Route::post('/Outlet-proses',[OutletController::class,'store']);
Route::get('/Outlet-Edit/{id}',[OutletController::class,'edit']);
Route::post('/Outlet-Update/{id}',[OutletController::class,'update']);
Route::get('/Outlet-Delete/{id}',[OutletController::class,'destroy']);

//Mencetak Data Outlet
Route::get('/Outlet-Cetak',[OutletController::class,'downloadpdf']);

//Crud Stok
Route::get('/Stok',[StokController::class,'index']);
Route::get('/Stok-Entry',[StokController::class,'create']);
Route::post('/Stok-proses',[StokController::class,'store']);
Route::get('/Stok-Edit/{id}',[StokController::class,'edit']);
Route::post('/Stok-Update/{id}',[StokController::class,'update']);
Route::get('/Stok-Delete/{id}',[StokController::class,'destroy']);

//Mencetak Data Stok
Route::get('/Stok-Cetak',[StokController::class,'downloadpdf']);

//Crud Pengiriman
Route::get('/Pengiriman',[PengirimanController::class,'index']);
Route::get('/Pengiriman-Entry',[PengirimanController::class,'create']);
Route::post('/Pengiriman-proses',[PengirimanController::class,'store']);
Route::get('/Pengiriman-Edit/{id}',[PengirimanController::class,'edit']);
Route::post('/Pengiriman-Update/{id}',[PengirimanController::class,'update']);
Route::get('/Pengiriman-Delete/{id}',[PengirimanController::class,'destroy']);

//Mencetak Data Pengiriman
Route::get('/Pengiriman-Cetak',[PengirimanController::class,'downloadpdf']);

//Crud Jadwal
Route::get('/Jadwal',[JadwalController::class,'index']);
Route::get('/Jadwal-Entry',[JadwalController::class,'create']);
Route::post('/Jadwal-proses',[JadwalController::class,'store']);
Route::get('/Jadwal-Edit/{id}',[JadwalController::class,'edit']);
Route::post('/Jadwal-Update/{id}',[JadwalController::class,'update']);
Route::get('/Jadwal-Delete/{id}',[JadwalController::class,'destroy']);

//Mencetak Data Jadwal
Route::get('/Jadwal-Cetak',[JadwalController::class,'downloadpdf']);

//Crud Rute
Route::get('/Rute',[RuteController::class,'index']);
Route::get('/Rute-Entry',[RuteController::class,'create']);
Route::post('/Rute-proses',[RuteController::class,'store']);
Route::get('/Rute-Edit/{id}',[RuteController::class,'edit']);
Route::post('/Rute-Update/{id}',[RuteController::class,'update']);
Route::get('/Rute-Delete/{id}',[RuteController::class,'destroy']);

//Mencetak Data Rute
Route::get('/Rute-Cetak',[RuteController::class,'downloadpdf']);

//Crud Truk
Route::get('/Truk',[TrukController::class,'index']);
Route::get('/Truk-Entry',[TrukController::class,'create']);
Route::post('/Truk-proses',[TrukController::class,'store']);
Route::get('/Truk-Edit/{id}',[TrukController::class,'edit']);
Route::post('/Truk-Update/{id}',[TrukController::class,'update']);
Route::get('/Truk-Delete/{id}',[TrukController::class,'destroy']);

//Mencetak Data Truk
Route::get('/Truk-Cetak',[TrukController::class,'downloadpdf']);
