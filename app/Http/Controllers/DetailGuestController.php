<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailGuestController extends Controller
{
    //
    public function index($id){
        $data = Products::where('id', $id)->first();

        return view('detailproductguest', compact('data'));
    }

    public function index2($id){
        $data = Products::where('id', $id)->first();

        return view('detailproductguest2', compact('data'));
    }
}
