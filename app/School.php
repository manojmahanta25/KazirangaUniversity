<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable =[
        'school_code',
        'school_name',
        'smeta_key',
        'sdes_key',
        's_order'
    ];
    protected $hidden =[
        'id',
        'created_at',
        'updated_at'
    ];
    public function getRouteKeyName()
    {
        return 'school_code';
    }
    public function faculty(){
            return $this->belongsToMany(Faculty::class,'faculty_school','school_id',
            'faculty_id','school_code','faculty_id')
                ->with('designations')
                ->with('departments')->with('isDean')->with('isHod')->orderBy('priority');
    }
    public function dean() {
        return $this->hasOne(Dean::class,'school','school_code')->with('deanInfo');
    }
    public function collaboration(){
        return $this->belongsToMany(Collaboration::class,'collaboration_school','school_id',
            'collaboration_id','school_code','id'
        );
    }
}
