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
    public function Bangla(){
        echo "I am Bangladesh";
     }
     public function Home(){
        return view('home/home');
     }

     public function Show(){
         $title ="My show Up page";
         $age=23;
         $age2=23;
         $test=1;
         $it = 2;
        return view('show',compact('title','age','age2','test','it'));
    }
}
