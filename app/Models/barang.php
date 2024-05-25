<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Barang', 'Nama_Barang', 'Harga_Barang', 'Berat_Barang', 'Id_Gudang'];
    //use HasFactory;
}
