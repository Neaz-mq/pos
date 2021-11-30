<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function addpurchase(){
        
        return view('backend.layouts.purchase.addpurchase');
    }
}
