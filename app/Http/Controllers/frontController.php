<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home.index', compact('products'));
    }
}
