<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Products;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SummaryController extends Controller
{
    //
    public function summary(){
        $data = OrderDetail::all();
        $order = Order::all();
        $produk = Products::all();
        return view('summary', compact('data', 'order', 'produk'));
    }
    
}
