<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable =[
        'depart_code',
        'depart_name',
        'school'
    ];
    protected $hidden =[
        'id',
        'created_at',
        'updated_at'
    ];
    public function getRouteKeyName()
    {
        return 'depart_code';
    }
    public function faculty(){

        return $this->belongsToMany(Faculty::class,'department_faculty','department_id'
            ,'faculty_id','depart_code','faculty_id')->with('designations');
    }
    public function schoolInfo(){
        return $this->belongsTo(School::class,'school_code','school');
    }
}
