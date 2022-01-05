<?php

namespace App\Http\Controllers;
use App\Models\User;
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

    public function postuser(Request $request){
        
        
        // dd($request->all());
        User::create([
            'type'=>$request->designation,
            'username'=>$request->name,
            'fullname'=>$request->fullname,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone,
             

        ]);
        return redirect()->route('user.manage');
    }

}
