<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacultyDetails extends Model
{
    protected $fillable = [
        'faculty_id',
        'qualification',
        'experience',
        'works',
        'awards',
        'publication',
        'addetails'
    ];
    public function getRouteKeyName()
    {
        return 'faculty_id';
    }
}
