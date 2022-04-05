<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function insert()
    {
       return view("student.insert");
    }

    public function create(Request $req)
    {

         $req->validate([
               "full_name" => "required|min:2|max:30|unique:students,full_name",
               "age" => "required|min:18|max:50|numeric",
               "city" => "required|min:3|max:50",
         ],
      [
         "full_name.unique" => "Dubra kosis mat karyiea :value ko lene ki"
      ]);
      

      Student::create($req->all());

      //   Student::create([
      //       "full_name" => $req->full_name ,
      //       "age" => $req->age ,
      //       "city" => $req->city ,
      //   ]);
        return redirect()->back();
    }

    public function list()
    {
       return view("student.list");
    }
}
