<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class EnrollStudent extends Model
{
    use HasFactory;
    protected $table = '_13_enrolledstudents';



    public function student()
    {
        return $this->belongsTo(Student::class, 'studentid', 'studentid');
    }


    public function offer()
    {
        return $this->belongsTo(OfferCourse::class, 'cid_11', 'cid_11');
    }
}
