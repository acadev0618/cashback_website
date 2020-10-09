<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderList(){
    	return view('admin.order.orderList')->with('menu','order');
    }
    public function OrderView(){
    	return view('admin.order.orderView')->with('menu','order');
    }
}
