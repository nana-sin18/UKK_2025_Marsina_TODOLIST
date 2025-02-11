<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\TaskController;

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
Route::get('/', [ListController::class, "index"]);
Route::get('/list/{id}', [ListController::class, "show"]);
Route::post('/tambahlist', [ListController::class, "store"]);
Route::delete('/hapuslist/{id}', [ListController::class, "hapus"]);

Route::post('/tambahtask', [TaskController::class, "store"]);
Route::delete('/hapustask/{id_list}', [TaskController::class, "hapus"]);
Route::get("/task/{id}/edit", [TaskController::class, "edit"]);
Route::get("/task/{id_task}/edit", [TaskController::class, "edit"]);
Route::put("/task/{id_task}", [TaskController::class, "update"]);


