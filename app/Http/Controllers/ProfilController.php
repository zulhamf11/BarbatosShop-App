<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $category = Category::all();
        $data = User::where('email', Auth::user()->email)->first();
        return view('profile', compact('data','category'));
    }

    public function index2()
    {
        $category = Category::all();
        $data = User::where('email', Auth::user()->email)->first();
        return view('profile', compact('data','category'));
    }
}
