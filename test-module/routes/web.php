<?php

use App\Http\Controllers\AgencyController;
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


Route::get('/',[\App\Http\Controllers\AgencyController::class,'index'])->name('agencies.list');
Route::prefix('/agencies')->group(function (){
    Route::get('/create',[AgencyController::class,'create'])->name('agencies.create');
    Route::post('/create',[AgencyController::class,'store'])->name('agencies.store');
    Route::get('/{id}/update',[AgencyController::class,'edit'])->name('agencies.edit');
    Route::post('/{id}/update',[AgencyController::class,'update'])->name('update');
    Route::post('/{id}/delete',[AgencyController::class,'delete']);
    Route::get('/search',[AgencyController::class,'search'])->name('agency.search');
});
