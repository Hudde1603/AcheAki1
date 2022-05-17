<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelefoneModel extends Model
{
  
    use HasFactory;
    protected $table = 'telefone';
    protected $fillable = ['tipo', 'ideletronico', 'idartigo']; //permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
