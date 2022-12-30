<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeUserController extends Controller
{
    //
    public function homeuser()
    {
        $data = Products::all();
        return view('homeuser', compact('data'));
    }
}
