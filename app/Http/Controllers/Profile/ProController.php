<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProController extends Controller
{
    public function home(){
        return view('profile');
    }
}
