<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rute extends Model
{
    protected $table = 'rute';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Rute', 'Jarak', 'Id_Pengiriman'];
    //use HasFactory;
}
