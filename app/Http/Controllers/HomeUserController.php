<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeUserController extends Controller
{
    //
    public function homeuser()
    {
        $category = Category::all();
        $data = Category::with('products')->get();
        return view('homeuser', compact('data','category'));
    }
}
