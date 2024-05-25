<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class truk extends Model
{
    protected $table = 'truk';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_Truk', 'Merek_Truk', 'No_Polisi', 'Berat_Muatan'];
    //use HasFactory;
}
