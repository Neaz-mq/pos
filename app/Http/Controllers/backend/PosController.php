<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function Point_of_Sale(){
        $title='Point of sale';
        return view('backend.layouts.pos',compact ('title'));
    }
}
