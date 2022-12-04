<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VocabsController;

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

//Home Routes
Route::get('home', [HomeController::class, 'index']);

//Vocabs Routes
Route::get('vocabs', [VocabsController::class, 'index']);

//Inserting values
Route::get('insert', [VocabsController::class, 'insert'] );
Route::post('/store', [VocabsController::class, 'store'] );
