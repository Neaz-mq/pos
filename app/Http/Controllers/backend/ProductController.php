<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function addproduct(){
        $categories=Category::all();
        // dd($product);
        return view('backend.layouts.product.addproduct',compact('categories'));
    }
    public function store(Request $request){
        //dd($request->all());
        Product::create([
            // name for db field || name for form fields
            'name'=>$request->name,
            'category_id'=> $request->category,
            'price'=>$request->price,
            'description'=>$request->description,
            'availabilty'=>$request->availability

        ]);
        return redirect()->route('product.manage');
    } 
    public function product_manage(){
        $product=Product::all();
        return view('backend.layouts.product.manageproduct',compact('product'));
    } 
    

}

