<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function customer_payment(){
        
        return view('backend.layouts.payment.customerpayment');
    }
    public function supplier_payment(){
        
        return view('backend.layouts.payment.supplierpayment');
    }
}
