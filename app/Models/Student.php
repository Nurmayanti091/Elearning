<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students'; // table saat ini



    //mendefinisikan field atau tabel apa aja yang boleh di isi
    protected $fillable =['name','nim','major','class','course_id'];


    /**
     * 1 to ONE bisa menggunakan 2 cara 
     * - hasOne(namaaModelnya): table saat inii meminjamkna id
     * - belongsTo(namaModelnya):table saat ini( table yang berhubungan ) meminjamkan id dari table lain
     * 
     * 1 to M:
     * hasMany (namaModelnya) :  table saat inii meminjamkna id
     * belongsToMany(namaModelnya):table saat ini meminjamkan id dari table lain
     * 
     */
    //mendefinisikan relasi ke model course
    public function course(){
        return $this->belongsTo(Courses::class);
    }
}
