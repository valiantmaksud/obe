<?php

namespace App\Http\Controllers;

use App\Models\OfferCourse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Traits\CheckPermission;
use App\Models\Institute;

class InstituteController extends Controller
{
    use CheckPermission;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResofferCoursense
     */
    public function index()
    {
        $depts = Institute::get();
        return view('backend.institutes.index', compact('depts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('institutecode', 'institutename');

        Institute::create($data);

        return redirect()->route('institutes.index')->withMessage('Dept added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfferCourse  $offerCourse
     * @return \Illuminate\Http\Response
     */
    public function show(OfferCourse $offerCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfferCourse  $offerCourse
     * @return \Illuminate\Http\Response
     */
    public function edit($offerCourse)
    {
        
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfferCourse  $offerCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        $dept = Institute::where('institutecode',$code)->update($request->only('institutename', 'institutecode'));

        return redirect()->route('institutes.index')->withMessage('Institute updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfferCourse  $offerCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        Institute::where('institutecode',$code)->delete();

        return redirect()->route('institutes.index')->withMessage('Dept deleted success');
    }
}
