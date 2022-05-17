<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BilheteModel extends Model
{
    use HasFactory;
    protected $table = 'bilhete';
    protected $fillable = ['filhacao1','filhacao2', 'iddocumento', 'idartigo']; //permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
