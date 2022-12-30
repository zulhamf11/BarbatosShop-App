<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    //
    public function searchHome(Request $request){
        if($request->has('search')){
            $data = Products::where('product_name', 'LIKE', '%'.$request->search.'%')->get();
        } else{
            $data = Products::all();
        }

        return view('home', compact('data'));

    }

    public function searchUserHome(Request $request){
        if($request->has('search')){
            $data = Products::where('product_name', 'LIKE', '%'.$request->search.'%')->get();
        } else{
            $data = Products::all();
        }

        return view('homeuser', compact('data'));

    }

    public function searchGuest(Request $request){
        if($request->has('search')){
            $data = Products::where('product_name', 'LIKE', '%'.$request->search.'%')->get();
        } else{
            $data = Products::all();
        }

        return view('welcome', compact('data'));

    }
}
