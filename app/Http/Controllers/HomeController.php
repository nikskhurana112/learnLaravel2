<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
     {
         $stud_name = "John";
         $class =  12;
         $roll_num = 33;
         return view("student")->with([ "stud_name" => $stud_name , 'roll_num' => $roll_num, 'class' => $class]);
     }
     public function contact()
     {
        return view("contact");
     }
}
