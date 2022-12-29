<?php

namespace App\Http\Controllers;
use Auth;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Products;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DetailController extends Controller
{
    //
    public function index($id){
        $data = Products::where('id', $id)->first();

        return view('detailproduct', compact('data'));
    }

    public function order(Request $request, $id) {
        $data = Products::where('id', $id)->first();
        $date = Carbon::now();

        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->date = $date;
        $order->status = 0;
        $order->total_price = $data->price * $request->qty;
        $order->save();


        $new_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $detail_order = new OrderDetail;
        $detail_order->product_id = $data->id;
        $detail_order->order_id = $new_order->id;
        $detail_order->qty = $request->qty;
        $detail_order->total_price = $data->price * $request->qty;
        $detail_order->save();

        return redirect('home');


    }
}
