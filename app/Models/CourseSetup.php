<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSetup extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function course()
    {
        return $this->belongsTo(Subject::class, 'course_id');
    }
}
