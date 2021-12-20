<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PersonaController;
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

 Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/persona', [PersonaController:: class, 'show']);

/* Route::get('/persona/usuario',[PersonaController:: class, 'show1']); */
/* 
Route::get('/persona', [PersonaController:: class, 'arreglos']);  */
Route::post('/guardar/persona',[PersonaController::class,'save']);
Route::put('/persona/update/{id}',[PersonaController::class,'update']);
Route::get('/persona/editar/{id}',[PersonaController::class,'editar']);
Route::put('/persona/eliminar/{id}',[PersonaController::class,'eliminar']);