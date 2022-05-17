<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PastaModel extends Model
{
    use HasFactory;
    protected $table='pasta';
    protected $fillable= ['idacessorio','idartigo'];//permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;

}
