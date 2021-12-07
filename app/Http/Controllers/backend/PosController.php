<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PosController extends Controller
{
    public function Point_of_Sale(){
       
        return view('backend.layouts.pos');
    }
}
