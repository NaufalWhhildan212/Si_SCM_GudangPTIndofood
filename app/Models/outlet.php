<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{
    protected $table = 'outlet';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Outlet', 'Nama_Outlet', 'Alamat_Outlet', 'No_Telepon', 'Id_Barang'];
    //use HasFactory;

}
