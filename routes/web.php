<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\StoreController;
use App\Http\Controllers\backend\PosController;
use App\Http\Controllers\backend\DashboardController;

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


Route::get('/',[StoreController::class,'store']);
Route::get('/POS',[PosController::class,'Point_of_Sale'])->name('POS.Point_of_Sale');
Route::get('/Dashboard',[DashboardController::class,'Dashboard']);
    

