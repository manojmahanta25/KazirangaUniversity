<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Collaboration extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable =[
        'name','type','description','image_link','web_link','priority'
    ];

    public function school()
    {
        return $this->belongsToMany(School::class,'collaboration_school','collaboration_id',
            'school_id','id','school_code'
        );
    }
    public function department()
    {
        return $this->belongsToMany(Department::class,'collaboration_department','collaboration_id',
            'department_id','id','depart_code'
        );
    }
}
