<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;
use Illuminate\Support\Facades\Storage;


class teacherController extends Controller
{
           
    public function store(Request $request){

        $teacher = new teacher; 

        
        
        $teacher->fname=$request->fname;
        $teacher->lname=$request->lname;
        $teacher->usertype=$request->usertype;
        $teacher->email=$request->email;
        $teacher->DOP=$request->DOP;
        $teacher->address=$request->address;
        $teacher->hq=$request->hq;
        $teacher->nic=$request->nic;
        $teacher->bank=$request->bank;
        $teacher->acno=$request->acno;
        $teacher->gender=$request->gender;
        $teacher->cn=$request->cn;
        $teacher->password=$request->password;
        $teacher->save();


        $data=teacher::all();
            
            return view('teacher')->with('teacher', $data);
        
       

    }       
    
    
}
