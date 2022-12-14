<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $category = Category::all();
        $data = Products::all();
        return view('manageproduct', compact('data', 'category'));
    }

    
    public function addproduct()
    {
        //
        $category = Category::all();
        return view('addproduct', compact('category'));
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
        $category = Category::all();
        return redirect()->route('manageproduct')->with('success', 'success adding product');
    }

    public function showproduct($id){
        $category = Category::all();
        $data = Products::find($id);
        return view('showproduct', compact('data', 'category'));
    }

    public function updateproduct(Request $request, $id){
        $data = Products::find($id);
        $data->update($request->all());
        if($request->hasFile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('manageproduct')->with('success', 'success update product');
    }

    public function deleteproduct($id) {
        $data = Products::find($id);
        $data->delete();
        return redirect()->route('manageproduct')->with('success', 'success delete product');
    }
   
}
