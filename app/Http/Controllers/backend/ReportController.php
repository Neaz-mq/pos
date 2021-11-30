<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reports(){
        $title='Manage report';
        return view('backend.layouts.report',compact ('title'));

    }
}
