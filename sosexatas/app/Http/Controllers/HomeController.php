<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('\home');
    }

    public function showLoginForm()
    {
        return view('\loginForm');
    }

    public function login(Request $request)
    {
        var_dump( expression: $request->all());
    }
}
