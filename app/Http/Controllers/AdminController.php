<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //function to show admin dashboard
    public function index()
    {
        return view('admin.dashboard');
    }
}
