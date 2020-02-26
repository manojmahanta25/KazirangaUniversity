<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable=[
        'name','d_visible','d_priority'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
    public function faculty(){
        return $this->belongsToMany(Faculty::class,'designation_faculty',
            'designation_id','faculty_id'
            ,'id','faculty_id')->with('departments');
    }
}
