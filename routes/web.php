<?php

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

Route::group(['middleware'=>'web'],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    Auth::routes();
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::get('empresas',[App\Http\Controllers\EmpresasController::class, 'index'])->middleware('auth');
Route::get('empresas/new',[App\Http\Controllers\EmpresasController::class, 'new'])->middleware('auth');
Route::post('empresas/add',[App\Http\Controllers\EmpresasController::class, 'add'])->middleware('auth');
Route::get('empresas/{id}/edit',[App\Http\Controllers\EmpresasController::class, 'edit'])->middleware('auth');
Route::post('empresas/{id}/update',[App\Http\Controllers\EmpresasController::class, 'update'])->middleware('auth');
Route::delete('empresas/{id}/remove',[App\Http\Controllers\EmpresasController::class, 'remove'])->middleware('auth');

Route::get('colaboradores',[App\Http\Controllers\ColaboradoresController::class, 'index'])->middleware('auth');
Route::get('colaboradores/new',[App\Http\Controllers\ColaboradoresController::class, 'new'])->middleware('auth');
Route::post('colaboradores/add',[App\Http\Controllers\ColaboradoresController::class, 'add'])->middleware('auth');
Route::get('colaboradores/{id}/edit',[App\Http\Controllers\ColaboradoresController::class, 'edit'])->middleware('auth');
Route::post('colaboradores/{id}/update',[App\Http\Controllers\ColaboradoresController::class, 'update'])->middleware('auth');
Route::delete('colaboradores/{id}/remove',[App\Http\Controllers\ColaboradoresController::class, 'remove'])->middleware('auth');
