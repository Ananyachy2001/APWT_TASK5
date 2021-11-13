<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MedicineController;




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
//Basic Routes
Route::get('/', [PagesController::class,'home'])->name('home');



//Medical routes
Route::get('/medical/create',[MedicineController::class,'create'])->name('medical.create');
Route::post('/medical/create',[MedicineController::class,'createSubmit'])->name('medical.create');
Route::get('/medical/list',[MedicineController::class,'list'])->name('medical.list');


