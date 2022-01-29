<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarkDistribution extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = '_12_markdistribution';


    public function offer()
    {
        return $this->belongsTo(OfferCourse::class, 'cid_11');
    }
}
