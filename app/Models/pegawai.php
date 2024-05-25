<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Pegawai', 'Nama_Pegawai', 'Alamat', 'No_Telepon', 'Id_Supir'];
    //use HasFactory;
}
