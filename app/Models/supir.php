<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    protected $table = 'supir';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Supir', 'Nama_Supir', 'Alamat', 'No_Telepon', 'Id_Pegawai'];
    //use HasFactory;
}
