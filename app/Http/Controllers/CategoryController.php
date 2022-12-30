<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    public function Category($category) {
        $data = ProductCategory::with('products')->where('category_id', $category)->get();
        return view('product_category', compact('data'));
    }

    public function CategoryGuest($category) {
        $data = ProductCategory::with('products')->where('category_id', $category)->get();
        return view('product_category_guest', compact('data'));
    }

    public function CategoryUser($category) {
        $data = ProductCategory::with('products')->where('category_id', $category)->get();
        return view('product_category_user', compact('data'));
    }

}
