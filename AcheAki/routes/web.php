<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AchadosController;
use App\Http\Controllers\perdidosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/achados', [AchadosController::class,'index'])->name('achados');
Route::post('/achados', [AchadosController::class,'creat'])->name('achados');
Route::get('/perdidos', [perdidosController::class,'index'])->name('perdidos');
Route::post('/perdidos', [perdidosController::class,'creat'])->name('perdidos');
///rota do item com um valor opcional 
Route::get('/item/{nome?}/{id?}',[perdidosController::class,'item'])->name('itemUnico');


///rota para pesuisar item perdido 
Route::post('/item_perdido/{nome?}',[perdidosController::class,'pesquisarPerdidos'])->name('item');


//rota para pesquisar item achado
Route::post('/item_achado/{nome?}',[AchadosController::class,'pesquisar'])->name('itemachado');


