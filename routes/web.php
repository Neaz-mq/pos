<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\StoreController;
use App\Http\Controllers\backend\PosController;
use App\Http\Controllers\backend\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;




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
Route::get('/Sales',[SaleController::class,'Sales']);




// product

Route::get('/add/product',[ProductController::class,'addproduct'])->name('add.product');
Route::get('/product/manage',[ProductController::class,'product_manage'])->name('product.manage');
Route::post('/product/post',[ProductController::class,'add'])->name('product.post');


// category
Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::post('/category/add',[CategoryController::class,'add'])->name('caterogy.add'); 

//start user
Route::get('/adduser',[UserController::class,'adduser'])->name('add.user');
//end user