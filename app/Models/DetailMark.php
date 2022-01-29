<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMark extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = '_14_detailmarks';



    public function student()
    {
        return $this->belongsTo(Student::class, 'studentid');
    }


    public function offer()
    {
        return $this->belongsTo(OfferCourse::class, 'cid_11');
    }
}
