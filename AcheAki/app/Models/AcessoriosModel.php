<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcessoriosModel extends Model
{
    use HasFactory;
    protected $table = 'acessorio';
    protected $fillable = ['cor', 'tamanho','marca','idartigo']; //permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
