<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gudang extends Model
{
    protected $table = 'gudang';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Gudang', 'Jenis_Gudang', 'Alamat_Gudang', 'Harga_Barang', 'Id_StokBarang'];
    //use HasFactory;
}
