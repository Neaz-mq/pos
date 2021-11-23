<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list(){
        $category=Category::all();
        return view('backend.layouts.category.category-list',compact('category'));
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
