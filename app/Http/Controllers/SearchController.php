<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $category = Category::all();

        return view('search', compact('data','category'));

    }

    public function searchUserHome(Request $request){
        if($request->has('search')){
            $data = Products::where('product_name', 'LIKE', '%'.$request->search.'%')->get();
        } else{
            $data = Products::all();
        }
        $category = Category::all();
        return view('searchUserHome', compact('data','category'));

    }

    public function searchGuest(Request $request){
        if($request->has('search')){
            $data = Products::where('product_name', 'LIKE', '%'.$request->search.'%')->get();
        } else{
            $data = Products::all();
        }
        $category = Category::all();
        return view('searchGuest', compact('data','category'));

    }
}
