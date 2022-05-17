<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ClienteModel extends Model
{
    use HasFactory;
    protected $table='cliente';
    protected $fillable= ['nome','telefone','email'];//permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;

}
