<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectronicoModel extends Model
{
    use HasFactory;
    protected $table = 'eletronico';
    protected $fillable = ['cor', 'marca', 'modelo', 'idartigo']; //permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
