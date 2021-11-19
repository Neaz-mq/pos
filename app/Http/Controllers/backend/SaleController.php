<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function Sales(){
        $title='Manage Sales';
        return view('backend.layouts.sales',compact ('title'));

    }
}
