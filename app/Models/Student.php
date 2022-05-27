<?php

namespace App\Models;

use App\Models\PoObtainedMark;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table = '_07_student';

    public function obtainedMarks()
    {
        return $this->hasMany(PoObtainedMark::class, 'studentid', 'studentid');
    }

    public function obtainedMark()
    {
        return $this->hasOne(PoObtainedMark::class, 'studentid' , 'studentid')->where('status_20', '1');
    }
}
