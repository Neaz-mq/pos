<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\StoreController;
use App\Http\Controllers\backend\PosController;
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
Route::get('/sale/details/{id}',[PosController::class,'details'])->name('saledetails');
Route::get('/sales',[PosController::class,'Sales'])->name('sales');
Route::post('/pos/cart',[PosController::class,'poscart'])->name('poscart');
Route::post('/cart/sale',[PosController::class,'cart'])->name('addcart');
Route::post('/cart/post/sale',[PosController::class,'cart_post'])->name('cartpost');
Route::get('/forget',[PosController::class,'forget'])->name('forget');




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
Route::get('/customer/edit/{id}',[CustomerController::class,'customeredit'])->name('customer.edit');
Route::get('/customer/delete/{id}',[CustomerController::class,'customerdelete'])->name('customer.delete');
Route::put('/customer/update/{id}',[CustomerController::class,'customerupdate'])->name('customer.update');
    
// Supplier
Route::get('/add/supplier', [SupplierController::class,'addsupplier'])->name('add.supplier');
Route::get('/supplier/manage',[SupplierController::class,'supplier_manage'])->name('supplier.manage');
Route::post('/supplier/post',[SupplierController::class,'store'])->name('supplier.post');
Route::get('/supplier/edit/{id}',[SupplierController::class,'supplieredit'])->name('supplier.edit');
Route::get('/supplier/delete/{id}',[SupplierController::class,'supplierdelete'])->name('supplier.delete');
Route::put('/supplier/update/{id}',[SupplierController::class,'supplierupdate'])->name('supplier.update');

//purchase
Route::get('/add/purchase', [PurchaseController::class,'addpurchase'])->name('add.purchase');
Route::get('/add/purchase', [PurchaseController::class,'addhistory'])->name('add.purchase');
Route::get('/manage/purchases',[PurchaseController::class,'manage_purchase'])->name('manage.purchases');
Route::post('/cart/purchases',[PurchaseController::class,'cart'])->name('cart');
Route::post('/cart/post/purchase',[PurchaseController::class,'cart_post'])->name('cart_post');
Route::get('/purchases/details/{id}',[PurchaseController::class,'details'])->name('details');



//payment
Route::get('/customer/payment', [PaymentController::class,'customer_payment'])->name('customer.payment');
Route::get('/supplier/payment', [PaymentController::class,'supplier_payment'])->name('supplier.payment');

//Report

Route::get('/report/sales', [ReportController::class,'sales_report'])->name('report.sales');
Route::get('/report/purchase', [ReportController::class,'purchase_report'])->name('report.purchase');