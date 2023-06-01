<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        // Admin dashboard logic
        return view('admin.dashboard');
    }
}
