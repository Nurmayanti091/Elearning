<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    //methode untuk menampilkan courses
    public function index(){

        $courses = Courses::all();
        return view('admin.contents.courses.index',[
            'courses' => $courses
        ]);
    }
}