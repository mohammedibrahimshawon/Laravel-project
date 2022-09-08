<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function list(){

        $students = array();
        for($i=0;$i<10;$i++)
        {
            $student = array (
                "id" => $i+1,
                "name" => "student" .($i+1),
                "dept" => "CS"

            );
            $student = (object)$student;
            $students[] = $student;
        }
        

        return view('student.list')->with('students',$students);
    }

    public function create(){
        return view('student.create');
    }

    public function get(){

        $name = "Shawon Mohammed";
        $id = "123 ";
        $courses= ["pl1","pl2","pl3","DS"] ;
        
        return view('student.get')

        ->with('name',$name)
        ->with('id',$id)
        ->with('courses',$courses);
    }

    public function details(){
        return "okk";
    }
}
