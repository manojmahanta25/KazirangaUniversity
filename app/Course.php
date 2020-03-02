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
        'meta_tag',
        'meta_des',
        'fee_inr',
        'fee_usd'
    ];
}
