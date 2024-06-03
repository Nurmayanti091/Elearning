<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';

    // mendefinisikan field yang boleh di isi 
    protected $fillable= ['name','category','description'];/**
    * 1 to ONE bisa menggunakan 2 cara 
    * - hasOne(namaaModelnya): table saat inii meminjamkna id
    * - belongsTo(namaModelnya):table saat ini( table yang berhubungan ) meminjamkan id dari table lain
    * 
    * 1 to M:
    * hasMany (namaModelnya) :  table saat inii meminjamkna id
    * belongsToMany(namaModelnya):table saat ini meminjamkan id dari table lain
    * 
    */
   //mendefinisikan relasi ke model student 1 to M
   public function students(){
    return $this->hasMany(Student::class);
   }
}
