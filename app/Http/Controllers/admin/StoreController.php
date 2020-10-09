<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function StoreList(){
    	return view('admin.stores.storeList')->with('menu','store');
    }
    public function StoreAdd(){
    	return view('admin.stores.storeAdd')->with('menu','store');
    }
    public function StoreEdit(){
    	return view('admin.stores.storeEdit')->with('menu','store');
    }

}
