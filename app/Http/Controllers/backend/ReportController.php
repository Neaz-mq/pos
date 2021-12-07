<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function sales_report(){
       
        return view('backend.layouts.reports.salesreport');

    }
    public function purchase_report(){
       
        return view('backend.layouts.reports.purchasereport');

    }
}
