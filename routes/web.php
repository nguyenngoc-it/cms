<?php

use App\Http\Controllers\EinheitController;
use App\Models\Einheit;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/list-data',[App\Http\Controllers\EinheitController::class, 'index'])->name('list');
Route::get('/add-data',[App\Http\Controllers\EinheitController::class, 'create'])->name('add');
Route::post('/create-data',[App\Http\Controllers\EinheitController::class, 'store'])->name('create');
Route::get('{id}/edit-data',[App\Http\Controllers\EinheitController::class, 'edit'])->name('edit');
Route::post('{id}/update-data',[App\Http\Controllers\EinheitController::class, 'update'])->name('update');
Route::get('{id}/delete-data',[App\Http\Controllers\EinheitController::class, 'delete'])->name('delete');
