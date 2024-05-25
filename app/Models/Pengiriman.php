<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    protected $table = 'pengiriman';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Pengiriman', 'Berat_Muatan', 'Id_Truk','Id_Pegawai','Id_Barang','Id_Jadwal','Id_Rute','Id_Supir'];
    //use HasFactory;
}
