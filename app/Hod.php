<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hod extends Model
{
    protected $fillable=[
        'department',
        'faculty_id'
    ];
    protected $hidden =[
        'id',
        'created_at',
        'updated_at'
    ];
}
