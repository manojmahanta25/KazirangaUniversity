<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dean extends Model
{
    protected $fillable=[
        'school',
        'faculty_id',
        'dean_message'
    ];
    protected $hidden =[
        'id',
        'created_at',
        'updated_at'
    ];

    public function deanInfo(){
      return $this->hasOne(Faculty::class,'faculty_id','faculty_id');
   }
}
