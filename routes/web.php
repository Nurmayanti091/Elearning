<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

//route route
Route::get('/', function () {
    return view('welcome');
});


//**
//methode HTTP:
// 1.Get di ggunakan unutk menampilkan data atau halamn 
//2. Post digunakan untuk mengirim data 
//Put digunkan untuk meng update data 
//4 Delete di gunakan untk menghapus data 


//kalo dia get itu untuk menampilkan 
//kalo dia pakek post dia mengirim data 
//konsep name ini memanggil root dengan menggunakan name 


// dashboard
Route::get('admin/dashboard',[DashboardController::class,'index']);

//route untuk menampilkan student 
Route::get('admin/student',[StudentController::class,'index']);

//route untuk menampilkan courses
Route::get('admin/courses',[CoursesController::class,'index']);


//route untuk menampilkan form tambah student
Route::get('admin/student/create',[StudentController::class,'create']);

//root untuk mengirim data form tambah student

Route::post('admin/student/create',[StudentController::class,'store']);


//root untuk menampilkan halaman edit student
Route::get('admin/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');

//root untuk menyimpan  hasil update student
Route::put('admin/student/update/{id}',[StudentController::class,'update']);

//root untuk menghapus student 
Route::delete('admin/student/delete/{id}',[StudentController::class,'destroy']);



//root untuk menampilkan form tambah course
Route::get('admin/courses/create',[CoursesController::class,'create']);

//root untuk megirim data courses tambah 
Route::post('admin/courses/store',[CoursesController::class,'store']);

//root menmapilkan data /halaman edit course
Route::get('admin/courses/edit/{id}',[CoursesController::class,'edit']);

//root untuk menyimpan hasil update courses
Route::put('admin/courses/update/{id}',[CoursesController::class,'update']);

//root untuk menghapus courses
Route::delete('admin/courses/delete/{id}',[CoursesController::class,'destroy']);










