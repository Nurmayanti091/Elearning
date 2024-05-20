<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

abstract class Controller
{
    //method untuk menampilkan halman student
    public function index(){
        //unutk mendapatkan data student dari database
       $students = Student::all();


       //panggil view dan kirim data ke view 
       return view('admin.contents.student.index',[
        'students' => $students
       ]);
    }
    
}
