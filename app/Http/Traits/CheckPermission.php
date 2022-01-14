<?php

namespace App\Http\Traits;

/**
 * 
 */
trait CheckPermission
{

    public function hasAccess($type)
    {
        if (auth()->id() != 1) {
            if (auth()->user()->userrole != $type) {
                redirect('/')->send();
            }
        }
    }
}
