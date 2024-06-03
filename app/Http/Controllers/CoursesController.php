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

    //methode untuk menamilkan form tambah courses

    public function create(){
       return view('admin.contents.courses.create');
    }

    //untuk membuat menyimpan courses baru
    public function store(Request $request){
        //validasi request
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
        ]);

        // menyimpan ke database
        Courses::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'description'=>$request->description,
        ]);


        //kembalikan ke halaman courses
        return redirect('/admin/courses')->with('massage','berhasil menambahkan courses');
    }
         //methode untuk menampilkan halaman edit

    public function edit ($id){
        //cari  data student berdasarkan id 
        $courses =Courses::find($id);  //SELECT * FROM WHERE id = $id;

        //kirim student ke view edit 
        return view('admin.contents.courses.edit',[
            'courses' => $courses,
        ]);
    }

    
//untuk menyimpan hasil update
public function update($id,Request $request){
    $courses =Courses::find($id);  //SELECT * FROM WHERE id = $id;

     //validasi data yang di terima
     $request->validate([
        'name'=>'required',
        'category'=>'required',
        'description'=>'required',
    ]);

   
   //simpan perubahan
   Courses::create([
    'name'=>$request->name,
    'category'=>$request->category,
    'description'=>$request->description,
]);

   //kembalikan ke hlaman courses
   return redirect('/admin/courses')->with('pesan','Berhasil mengedit courses.');
}
}
