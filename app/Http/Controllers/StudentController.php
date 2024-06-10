<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Student;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class StudentController extends Controller
{
    //methode untuk menampilakn form tambah student 
    public function create(){

        //dapatkan data courses dari database 
        $courses = Courses::all();

        return view('admin.contents.student.create',[
            'courses'=> $courses
        ]);
    }


    //methode untuk menyimpan data student 
    public function store(Request $request){
       //validasi data yang di terima
       $request ->validate([    //untuk memvalidasi dengan tag validate 
        'name'=> 'required',
        'nim'=>'required|numeric',
        'major'=>'required',
        'class'=>'required',
        'course_id'=>'nullable',
       ]);
     

       // menyimpan ke database dengan memanggil method student 
       Student::create([
        'name'=>$request->name,
        'nim'=>$request->nim,
        'major'=>$request->major,
        'class'=>$request->class,
        'course_id'=> $request->course_id,
       ]);


       //redirect atau mengarahkan k ke halaman 
       return redirect('/admin/student')->with('pesan','Berhasil menambahkan data.');
    }

    //methode untuk menampilkan halaman edit

    public function edit ($id){
        //cari  data student berdasarkan id 
        $student =Student::find($id);  //SELECT * FROM WHERE id = $id;
        $courses = Courses::all();
        //kirim student ke view edit 
        return view('admin.contents.student.edit',[
            'student' => $student ,'courses'=> $courses
        ]);
   }

//untuk menyimpan hasil update
     public function update($id,Request $request){
        $student =Student::find($id);  //SELECT * FROM WHERE id = $id;

         //validasi data yang di terima
       $request ->validate([    //untuk memvalidasi dengan tag validate 
        'name'=> 'required',
        'nim'=>'required|numeric',
        'major'=>'required',
        'class'=>'required'
       ]);
       
       //simpan perubahan
       $student->update([
        'name'=>$request->name,
        'nim'=>$request->nim,
        'major'=>$request->major,
        'class'=>$request->class,
       ]);

       //kembalikan ke hlaman student
       return redirect('/admin/student')->with('pesan','Berhasil mengedit student.');
   }



    //methode untuk menghapus student

    public function destroy($id){
        $student =Student::find($id);  //SELECT * FROM WHERE id = $id;

        //hapus student
        $student->delete();

        
       //kembalikan ke hlaman student
       return redirect('/admin/student')->with('pesan','Berhasil mengedit student.');
    }

    }
