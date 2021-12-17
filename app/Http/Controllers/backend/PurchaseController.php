<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Purchase;
use App\Models\Purchasehistory;
use App\Models\Stock;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function addpurchase(){
        
        $products=Product::all();
        $categories=Category::all();
        $suppliers=Supplier::all();
        $purchases=Purchase::all();
       // $purchaseshistory=Purchasehistory::all();
        

        return view('backend.layouts.purchase.addpurchase',compact('products','suppliers','categories','purchases'));
    }
    public function purchasedetails(Request $request){
        //dd($request->all());
        Purchase::create([
            // name for db field || name for form fields
            
            'product_id'=> $request->name,
            'unit_price'=>$request->price,
            'quantity'=>$request->quantity,
            'sub_total'=>$request->price
        ]);
        return redirect()->route('add.purchase');      
    } 
    public function addhistory(){
        
        $suppliers=Supplier::all();
        $products=Product::all();
        $purchases=Purchase::all();

        return view('backend.layouts.purchase.addpurchase',compact('suppliers','products','purchases'));
    }
   
     
      public function manage_purchase(){
        
       
        $purchasehistories=Purchasehistory::all();
       
        return view('backend.layouts.purchase.managepurchase',compact('purchasehistories'));
     }
     public function purchasehistory(Request $request){
        //dd($request->all());
        Purchasehistory::create([
            // name for db field || name for form fields
            
            'purchase_id'=> $request->purchase,
            'challan_no'=>$request->number,
            'supplier_id'=>$request->name,
            'total_price'=>$request->price,
            'date'=>$request->date
        ]);
        return redirect()->route('manage.purchases');      
    } 

   
    }
