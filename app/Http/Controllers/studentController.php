<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentController extends Controller
{
    public function index(){
              $students= student::all();
              return view('student-reg',compact('students'));
    }

    public function addStudent( Request $request){
        // dd($request->all());
        student::create($request->all());
        return redirect()->route('home')->with('massage','student created successfully');
    }
}

