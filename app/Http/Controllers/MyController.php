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

     public function Show($id,$name='Hasan'){
         echo $name;
         echo $id;
    }
}
