<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function Category($categories) {
        $category = Category::all();
        $data = Products::where('category_id', $categories)->get();
    
        return view('product_category', compact('data','category'));
    }

    public function CategoryGuest($categories) {
        $category = Category::all();
        $data = Products::where('category_id', $categories)->get();
    
        return view('product_category_guest', compact('data','category'));
    }

    public function CategoryUser($categories) {
        $category = Category::all();
        $data = Products::where('category_id', $categories)->get();
    
        return view('product_category_user', compact('data','category'));

    }
}