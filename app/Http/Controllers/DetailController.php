<?php

namespace App\Http\Controllers;
use Auth;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Category;
use App\Models\Products;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DetailController extends Controller
{
    //
    public function index($id){
        $category = Category::all();
        $data = Products::where('id', $id)->first();

        return view('detailproduct', compact('data','category'));
    }

    public function detailProduct($id){
        $data = Products::where('id', $id)->first();
        $category = Category::all();
        return view('detailproductguest', compact('data', 'category'));
    }

    public function order(Request $request, $id) {
        $data = Products::where('id', $id)->first();
        $date = Carbon::now();

        // validation check
        $order_check = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        // save to order database
        if(empty($order_check)){
            $order = new Order;
            $order->user_id = Auth::user()->id;
            $order->product_name = $data->product_name;
            $order->date = $date;
            $order->status = 0;
            $order->total_price = 0;
            $order->save();
        }
        

        // save to detailorder database
        $new_order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        
        // check detailorder
        $detail_order_check = OrderDetail::where('product_id', $data->id)->where('order_id',$new_order->id)->first();
        
        
        if(empty($detail_order_check)){
            $detail_order = new OrderDetail;
            $detail_order->user_id = Auth::user()->id;
            $detail_order->product_id = $data->id;
            $detail_order->order_id = $new_order->id;
            $detail_order->product_name = $data->product_name;
            $detail_order->image = $data->image;
            $detail_order->qty = $request->qty;
            $detail_order->total_price = $data->price * $request->qty;
            $detail_order->save();
        } else{
            $detail_order = OrderDetail::where('product_id', $data->id)->where('order_id',$new_order->id)->first();
            
            $detail_order->qty = $detail_order->qty+$request->qty;
            // price update
            $new_detail_order_price = $data->price * $request->qty;
            $detail_order->total_price = $detail_order->total_price + $new_detail_order_price;
            $detail_order->update();
        }

        // total_price
        $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $order->total_price = $order->total_price + $data->price * $request->qty;
        $order->update();
        

        return redirect('UserHome');


    }


}
