<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    protected $table = 'stok';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Stok_Barang', 'Nama_Barang', 'Jumlah_Barang'];//use HasFactory;
}
