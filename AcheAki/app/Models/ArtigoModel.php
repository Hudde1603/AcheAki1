<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtigoModel extends Model
{
    use HasFactory;
    protected $table='artigo';
    protected $fillable= ['descricao','foto','status','idcliente', 'item_name'];//permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
