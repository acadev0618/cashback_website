<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class AuthController extends Controller
{
    public function loginPage(){
        return view('auth.login');
    }

    public function UserRegister(Request $request){
    	
    }

    public function adminLoginPage(){
        return view('admin.auth.auth')->with('menu',"");
    }
}
