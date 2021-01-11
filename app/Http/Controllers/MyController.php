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
     public function forEach(){
         $id =45;

        $data =[];
        $data['title'] ="My Home Page";
        $data['posts'] = [
            [
                'id'=>1,
                'title'=>'my name is hasan',
                'contant'=>'i am a Flutter and Laravel developer'
            ],
            [
                'id'=>2,
                'title'=>'my name is hasan',
                'contant'=>'i am a Flutter and Laravel developer'
            ],
            [
                'id'=>3,
                'title'=>'my name is hasan',
                'contant'=>'i am a Flutter and Laravel developer'
            ],
            [
                'id'=>4,
                'title'=>'my name is hasan',
                'contant'=>'i am a Flutter and Laravel developer'
            ],
            [
                'id'=>5,
                'title'=>'my name is hasan',
                'contant'=>'i am a Flutter and Laravel developer'
            ],
            [
                'id'=>6,
                'title'=>'my name is hasan',
                'contant'=>'i am a Flutter and Laravel developer'
            ],

        ];

        return view('foreach',$data);
     }

     public function Show(){
         $title ="My show Up page";
         $age=23;
         $age2=23;
         $test=1;
         $it = 2;
         $ist=true;
         $fl=false;
         $emt = true;
         $text = "One of our <b>numerous qualities</b> is the <mark>consideration</mark> of tight element driven criticism, combined with client collaboration following continuous integration and continuous development.";
        return view('show',
                   compact('title','age','age2','test','it','ist','fl','emt','text'));
    }
}
