<?php

namespace App\Models;

use App\Models\PoObtainedMark;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = '_07_student';

    public function obtainedMarks()
    {
        return $this->hasMany(PoObtainedMark::class, 'studentid');
    }

    public function obtainedMark()
    {
        return $this->hasOne(PoObtainedMark::class, 'studentid')->where('status_20', 'Active');
    }
}
