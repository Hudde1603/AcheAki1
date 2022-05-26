<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class artigoController extends Controller
{
    function index(){
        return view('/Admin/artigos');
    }
}
