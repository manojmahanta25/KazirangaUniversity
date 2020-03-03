<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable =[
        'course_code',
        'course_name',
        'type',
        'campus_recruitment',
        'skill_level',
        'language',
        'batch_size',
        'projects',
        'mode',
        'syllabus',
        'description',
        'eligibility',
        'meta_tag',
        'meta_des',
        'fee_inr',
        'fee_usd',
        'image',
        'internship',
        'duration'
    ];
    protected $hidden =[
        'id',
        'deleted_at'
    ];
    public function getRouteKeyName()
    {
        return 'course_code';
    }

    public function school()
    {
        return $this->belongsToMany(School::class,'course_school','course_id',
            'school_id','course_code','school_code'
        );
    }
    public function department()
    {
        return $this->belongsToMany(Department::class,'course_department','course_id',
            'department_id','course_code','depart_code'
        );
    }
    public function getImageAttribute($value) {
        return url($value);
    }
    public function getSyllabusAttribute($value) {
        return url($value);
    }
}
