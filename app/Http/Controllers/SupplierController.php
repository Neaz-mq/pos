<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Supplier;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function addsupplier(){
        
        return view('backend.layouts.suppliers.addsupplier');
    }
    public function store(Request $request){
        //  dd($request->all());
        Supplier::create([
            // name for db field || name for form fields
             'name'=>$request->name,
             'email'=> $request->email,
             'address'=>$request->address,
             'telephone'=>$request->telephone
             

        ]);
        return redirect()->route('supplier.manage');
    }
    public function supplier_manage(){
        $suppliers=Supplier::all();
        
        return view('backend.layouts.suppliers.managesupplier',compact('suppliers'));
    }
    
}