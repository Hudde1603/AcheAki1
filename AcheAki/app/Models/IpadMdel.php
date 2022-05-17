<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IpadMdel extends Model
{
    use HasFactory;
    protected $table = 'ipad';
    protected $fillable = ['ideletronico', 'idartigo']; //permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
