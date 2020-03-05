<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'faculty_id',
        'title',
        'givenName',
        'familyName',
        'email',
        'website',
        'visible',
        'status',
        'priority',
        'image'
    ];
    protected $hidden =[
        'id',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
    public function getRouteKeyName()
    {
        return 'faculty_id';
    }
    public function schools(){
        return $this->belongsToMany(School::class,'faculty_school','faculty_id',
            'school_id','faculty_id','school_code'
            );
    }
    public function designations(){
        return $this->belongsToMany(Designation::class,'designation_faculty',
            'faculty_id','designation_id'
            ,'faculty_id','id')->orderBy('d_priority');
    }
    public function departments(){
        return $this->belongsToMany(Department::class,'department_faculty','faculty_id'
        ,'department_id','faculty_id','depart_code');
    }
    public function isDean(){
        return $this->hasOne(Dean::class,'faculty_id','faculty_id');
    }
    public function isHod(){
        return $this->hasOne(Hod::class,'faculty_id','faculty_id');
    }
    public function facultyDet() {
        return $this->hasOne(FacultyDetails::class,'faculty_id','faculty_id');
    }
    public function getImageAttribute($value) {
        return ($value)? url($value): null;
    }

}
