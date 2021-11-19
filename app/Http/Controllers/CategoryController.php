<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(){
        return view('backend.layouts.product.category-list');
    }

    public function add(Request $request){
        // dd($request->all());
        Category::create([
            // name for db field || name for form fields
            'name'=> $request->name,
            'details'=>$request->details
        ]);
        return redirect()->back();
    }
}
