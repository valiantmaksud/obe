<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OfferCourse extends Model
{

    use HasFactory;

    protected $guarded = [];
    protected $table = '_11_offercourses';



    public static function boot()
    {
        parent::boot();

        if (!App::runningInConsole()) {
            /**
             * Auto create created_by field when create anything through model
             */
            static::creating(function ($model) {
                $model->fill([
                    'cid_11' => $model::max('id') + 1,
                ]);
            });
        }
    }
}
