<?php

namespace App\Http\Controllers;

use App\Models\MarkDistribution;
use Illuminate\Http\Request;

class AjaxDataController extends Controller
{

    public function getQID(Request $request)
    {
        return MarkDistribution::where('markofexam', $request->examtype)->where('cid_11', $request->qid)->first();
    }
}
