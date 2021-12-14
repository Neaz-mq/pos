<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Purchase;


use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function addpurchase(){
        
        $products=Product::all();
        $suppliers=Supplier::all();
        

        return view('backend.layouts.purchase.addpurchase',compact('products','suppliers'));
    }
    public function purchasedetails(Request $request){
        //dd($request->all());
        Purchase::create([
            // name for db field || name for form fields
            
            'product_id'=> $request->name,
            'challan_no'=>$request->number,
            'supplier_id'=>$request->name,
            'unit_price'=>$request->price,
            'quantity'=>$request->quantity,
            'sub_total'=>$request->price,
            'date'=>$request->date


        ]);
        return redirect()->route('manage.purchase');
    } 

     
     public function manage_purchase(){
        $purchases=Purchase::all();
       
        return view('backend.layouts.purchase.managepurchase',compact('purchases'));
    }
   
    }