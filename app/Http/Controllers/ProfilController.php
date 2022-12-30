<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    //
    public function index()
    {
        $data = User::all();
        return view('profile', compact('data'));
    }

    public function index2()
    {
        $data = User::all();
        return view('profileadmin', compact('data'));
    }
}
