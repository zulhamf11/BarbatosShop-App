<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //
    public function cart() {
        $data = OrderDetail::all();
        return view('cart', compact('data'));
    }
}
