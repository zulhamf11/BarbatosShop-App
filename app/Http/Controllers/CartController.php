<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Category;
use App\Models\Products;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    //
    public function cart() {
        $category = Category::all();
        $data = OrderDetail::all();
        return view('cart', compact('data', 'category'));
    }

    public function deletecart($id) {
        $data = OrderDetail::find($id);
        $data->delete();
        return redirect()->route('cart')->with('success', 'success delete from cart');
    }

}
