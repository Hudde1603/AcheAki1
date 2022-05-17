<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FioModel extends Model
{
    use HasFactory;
    protected $table='fio';
    protected $fillable= ['idacessorio','idartigo'];//permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
