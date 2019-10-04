<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\Storage;

class studentController extends Controller
{
           
    public function store(Request $request){

        $student = new student; 

        
        
        $student->fname=$request->fname;
        $student->lname=$request->lname;
        $student->guardian=$request->guardian;
        $student->email=$request->email;
        $student->DOP=$request->DOP;
        $student->address=$request->address;
        $student->Grade=$request->Grade;
        $student->section=$request->section;
        $student->phone=$request->phone;
        $student->password=$request->password;
        $student->save();


        $data=student::all();
            
        return view('student')->with('student', $data);
        
       

    }       
    
    
}