<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorListController extends Controller
{
    public function StaticPage(){
        return view('client.vendorList');
    }
    public function AllStore(){
        return view('client.allStore');
    }
    public function storeDetail(){
        return view('client.StoreDetail');
    }
}
