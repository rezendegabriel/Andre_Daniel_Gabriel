<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerUser()
    {
        return view('\registerUser');
    }

    public function registerSubject()
    {
        return view('\registerSubject');
    }
}
