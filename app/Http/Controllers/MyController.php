<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function Login()
    {
        return view('login');
    }
    public function Signup()
    {
        return view('signup');
    }
}
