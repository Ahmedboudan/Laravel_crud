<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

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

// Route::get('/', function () {
//     return view('hello');
// });

//Route::get('/','App\Http\Controllers\HelloWorldController@index');
Route::get('/',[HelloWorldController::class,'index']);





// Route::get('/bonjour', function(){
//     return 'bonjour';
// });
// Route::get('/hello',function(){
//     return view('hello');
// });
// Route::get('/test',function(){
//     return response()->json([
//         'titre'=> 'mon titre',
//         'description'=> 'Ma description'
//     ]);
// });