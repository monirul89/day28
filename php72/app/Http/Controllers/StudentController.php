<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
//        return 'Hello World from Controller';
        $name = 'Mosiur Rahman';
        $age =  15;

//        basic syntax

//        return view('demo', compact('name', 'age'));

//        return view('demo')
//            ->with('name',$name)
//            ->with('age',$age);

        return view('demo',[
            'name'=>$name,
            'age'=>$age
        ]);

    }
    public function newOne(){
//        echo 'Hello World from Controller';
      return view('welcome');
    }
    public function newTwo(){
        echo 'Hello World from Controller new Two page';
//      return view('welcome');
    }

}
