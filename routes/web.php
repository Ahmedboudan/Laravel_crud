<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\UserController;
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
Route::get('/register',[UserController::class,'register']);
Route::post('/register/traitement',[UserController::class,'register_traitement']);
Route::delete('/logout',[UserController::class,'logout'])->name('auth.logout');
Route::get('/login',[UserController::class,'login'])->name('auth.login');
Route::get('/home',[UserController::class,'lister']);
Route::post('/authentifier',[UserController::class,'authentifier']);
Route::get('/',[EtudiantController::class,'lister'])->middleware('auth');
Route::get('/ajouter',[EtudiantController::class,'ajouter'])->middleware('auth');
Route::post('/ajouter/traitement',[EtudiantController::class,'ajouter_traitement']);
Route::get('/modifier/{id}',[EtudiantController::class,'modifier'])->middleware('auth');
Route::post('/modifier/traitement',[EtudiantController::class,'modifier_traitement']);
Route::get('/supprimer/{id}',[EtudiantController::class,'supprimer'])->middleware('auth');
Route::get('/rechercher',[EtudiantController::class,'rechercher'])->middleware('auth');
