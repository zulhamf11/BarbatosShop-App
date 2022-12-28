<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    //
    public function index(Request $request)
    {
        if($request->has('Search')){
            $data = Products::where('price', 'LIKE', '%'.$request->Search.'%');
        } else {
            $data = Products::all();
        }
       
        return view('welcome', compact('data'));
    }
}
