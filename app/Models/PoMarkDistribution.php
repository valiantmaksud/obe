<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class PoMarkDistribution extends Model
{
    use HasFactory;
    protected $table = '_18_pomarkdistribution';



    public function student()
    {
        return $this->belongsTo(Student::class, 'studentid');
    }


    public function offer()
    {
        return $this->belongsTo(OfferCourse::class, 'cid_11');
    }
}
