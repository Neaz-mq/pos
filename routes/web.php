<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\StoreController;
use App\Http\Controllers\backend\PosController;
use App\Http\Controllers\backend\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\backend\PurchaseController;
use App\Http\Controllers\backend\PaymentController;
use App\Http\Controllers\backend\ReportController;




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


//Dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

//POS
Route::get('/pos',[PosController::class,'Point_of_Sale'])->name('pos');

//Sale
Route::get('/sales',[SaleController::class,'Sales'])->name('sales');






// product

Route::get('/add/product',[ProductController::class,'addproduct'])->name('add.product');
Route::get('/product/manage',[ProductController::class,'product_manage'])->name('product.manage');
Route::post('/product/post',[ProductController::class,'store'])->name('product.post');


// category
Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::post('/category/add',[CategoryController::class,'add'])->name('caterogy.add');

// Stock
Route::get('/stock/manage',[StockController::class,'store'])->name('stock.manage');

//start user
Route::get('/adduser',[UserController::class,'adduser'])->name('add.user');
Route::get('/user/manage',[UserController::class,'user_manage'])->name('user.manage');

    

//end user

// Customer
Route::get('/add/customer', [CustomerController::class,'addcustomer'])->name('add.customer');
Route::get('/customer/manage',[CustomerController::class,'customer_manage'])->name('customer.manage');
Route::post('/customer/post',[CustomerController::class,'store'])->name('customer.post');
    
// Supplier
Route::get('/add/supplier', [SupplierController::class,'addsupplier'])->name('add.supplier');
Route::get('/supplier/manage',[SupplierController::class,'supplier_manage'])->name('supplier.manage');
Route::post('/supplier/post',[SupplierController::class,'store'])->name('supplier.post');


//purchase
Route::get('/add/purchase', [PurchaseController::class,'addpurchase'])->name('add.purchase');
Route::post('/purchase/post',[PurchaseController::class,'purchasedetails'])->name('purchasedetails.post');
Route::get('/add/purchase', [PurchaseController::class,'addhistory'])->name('add.purchase');
Route::get('/manage/purchases',[PurchaseController::class,'manage_purchase'])->name('manage.purchases');
Route::post('/purchases/post',[PurchaseController::class,'purchasehistory'])->name('purchasehistory.post');




//payment
Route::get('/customer/payment', [PaymentController::class,'customer_payment'])->name('customer.payment');
Route::get('/supplier/payment', [PaymentController::class,'supplier_payment'])->name('supplier.payment');

//Report

Route::get('/report/sales', [ReportController::class,'sales_report'])->name('report.sales');
Route::get('/report/purchase', [ReportController::class,'purchase_report'])->name('report.purchase');