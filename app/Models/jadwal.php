<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table = 'jadwal';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Jadwal', 'Id_Pengiriman', 'Jumlah_Barang', 'Lokasi'];
    //use HasFactory;
}
