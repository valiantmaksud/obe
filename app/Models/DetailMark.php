<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class DetailMark extends Model
{
    use HasFactory;
    protected $table = '_14_detailmarks';



    public function student()
    {
        return $this->belongsTo(Student::class, 'studentid', 'studentid');
    }


    public function offer()
    {
        return $this->belongsTo(OfferCourse::class, 'cid_11', 'cid_11');
    }
}
