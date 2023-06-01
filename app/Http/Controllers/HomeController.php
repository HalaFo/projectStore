<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
class HomeController extends Controller
{
    public function index()
    {
        $userRequests = Auth::user()->orders;
        return view('dashboard.index', compact('userRequests'));
    }

    public function index()
    {
        $products = Product::paginate(10);
        return view('client.home', compact('products'));
    }
}
