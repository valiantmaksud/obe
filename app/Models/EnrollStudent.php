<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollStudent extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = '_13_enrolledstudents';
}
