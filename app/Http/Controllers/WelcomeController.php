<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = Category::with('products')->get();
        $category = Category::all();
       
        return view('welcome', compact('data','category'));
    }
}
