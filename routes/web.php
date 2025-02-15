<?php

use App\Http\Controllers\ListController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;

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

// list
Route::get('/', [ListController::class, "index"]);
Route::get('/list/{id}', [ListController::class, "show"]);
Route::post('/tambahlist', [ListController::class, "store"]);
Route::delete('/hapuslist/{id}', [ListController::class, "hapus"]);
Route::get("/list/{id}/editlist", [ListController::class, "edit"]);
Route::put("/edit/{id}", [ListController::class, "update"]);



// task
Route::post('/tambahtask', [TaskController::class, "store"]);
Route::delete('/hapustask/{id_list}', [TaskController::class, "hapus"]);
Route::get("/task/{id}/edit", [TaskController::class, "edit"]);
Route::get("/task/{id}/edit", [TaskController::class, "edit"]);
Route::put("/task/{id}", [TaskController::class, "update"]);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


