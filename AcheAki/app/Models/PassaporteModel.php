<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassaporteModel extends Model
{
    use HasFactory;
    protected $table = 'passaporte';
    protected $fillable = ['numero','numpessoal', 'tipo', 'idartigo','iddocumento']; //permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
