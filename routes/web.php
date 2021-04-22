<?php

use App\Http\Controllers\MembreController;
use App\Models\Membre;
use Illuminate\Support\Facades\Route;

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
    $membres=Membre::all();
    return view('welcome',compact('membres'));
});
Route::post('/membre-store', [MembreController::class, 'store']);
Route::get('/membre-show/{id}',[MembreController::class,'show']);
Route::post('/membre-delete/{id}',[MembreController::class,'destroy']);
Route::get('/membre-edit/{id}',[MembreController::class,'edit']);
Route::post('/membre-update/{id}',[MembreController::class,'update']);
