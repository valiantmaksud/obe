<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfferCourse extends Model
{

    use HasFactory;

    protected $table = '_11_offercourses';

 

    public function ObtainedMark()
    {
        return $this->hasOne(PoObtainedMark::class, 'cid_11')->where('status_20', 'Active');
    }
}
