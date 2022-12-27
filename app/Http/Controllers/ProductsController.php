<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    
    public function index()
    {
        //
        $data = Products::all();
        return view('manageproduct', compact('data'));
    }

    
    public function addproduct()
    {
        //
        return view('addproduct');
    }

    public function insertproduct(Request $request)
    {
        //
        $data = Products::create($request->all());
        if($request->hasFile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
    }

   
}
