<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoModel extends Model
{
    use HasFactory;
    protected $table='documento';
    protected $fillable= ['genero','nomedocumento','idartigo'];//permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
