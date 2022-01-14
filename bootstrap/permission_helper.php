<?php


function hasPermission($type)
{
    if (auth()->id() == 1) {
        return true;
    } else {
        if (is_array($type)) {
            if (in_array(auth()->user()->userrole, $type)) {
                return true;
            }
        } else if (auth()->user()->userrole == $type) {
            return true;
        }
        return false;
    }
}
