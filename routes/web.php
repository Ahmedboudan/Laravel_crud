<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Route::get('/','App\Http\Controllers\HelloWorldController@index');
Route::get('/',[EtudiantController::class,'lister']);
Route::get('/ajouter',[EtudiantController::class,'ajouter']);
Route::post('/ajouter/traitement',[EtudiantController::class,'ajouter_traitement']);
Route::get('/modifier/{id}',[EtudiantController::class,'modifier']);
Route::post('/modifier/traitement',[EtudiantController::class,'modifier_traitement']);
Route::get('/supprimer/{id}',[EtudiantController::class,'supprimer']);
Route::get('/rechercher',[EtudiantController::class,'rechercher']);
