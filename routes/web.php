<?php

use App\Http\Controllers\ListController;
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

// arahkan ke controller
Route::get('/sidebar', [ListController::class, "index"]);
Route::post('/tambahlist', [ListController::class, "store"]);
Route::get('/hapuslist/{id}', [ListController::class, "hapus"]);
