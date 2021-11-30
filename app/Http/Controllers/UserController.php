<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function adduser(){
        return view('backend.layouts.users.adduser');
    }
    public function user_manage(){
       
      
        return view('backend.layouts.users.manageuser');
    }
}
