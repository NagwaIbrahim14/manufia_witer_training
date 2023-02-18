<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    //
    public function index(){
        $orders=Order::paginate(7);
        return view('orders.index',['orders'=> $orders]);
    }
    public function show($id){
        $order=Order::find($id);
        return view('orders.show',['order'=>$order]);
    }
}
