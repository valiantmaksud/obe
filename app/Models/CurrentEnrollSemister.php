<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentEnrollSemister extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $table = '_04_currentenrollsemester';
}
