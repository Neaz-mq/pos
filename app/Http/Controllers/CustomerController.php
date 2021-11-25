<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Customer;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addcustomer(){
        // $customers=Customer::all();
        return view('backend.layouts.customers.addcustomer');
    }
    public function store(Request $request){
        //  dd($request->all());
        Customer::create([
            // name for db field || name for form fields
             'name'=>$request->name,
             'email'=> $request->email,
             'address'=>$request->address,
             'telephone'=>$request->telephone
             

        ]);
        return redirect()->route('customer.manage');
    }
    public function customer_manage(){
        $customers=Customer::all();
        //dd($customers);
        return view('backend.layouts.customers.managecustomer',compact('customers'));
    }
}
