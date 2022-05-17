<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaoEleitoral extends Model
{
    use HasFactory;
    protected $table = 'cartaoeleitoral';
    protected $fillable = ['grupo','numeleitor','idartigo','iddocumento']; //permanecer dados no bd pelo fill()  e create do eloquente
    public $timestamps = false;
}
