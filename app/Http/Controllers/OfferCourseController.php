<?php

namespace App\Http\Controllers;

use App\Http\Traits\CheckPermission;
use App\Models\OfferCourse;
use Illuminate\Http\Request;

class OfferCourseController extends Controller
{
    use CheckPermission;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResofferCoursense
     */
    public function index()
    {
        $offer_courses = OfferCourse::latest()->get();
        return view('backend.offer_courses.index', compact('offer_courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.offer_courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['_11_cid'] = OfferCourse::max('id') + 1;

        OfferCourse::create($data);

        return redirect()->route('offer_courses.index')->withMessage('Po added success');
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
    public function edit(OfferCourse $offerCourse)
    {
        return view('backend.offer_courses.edit', compact('offerCourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfferCourse  $offerCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfferCourse $offerCourse)
    {
        $offerCourse->update($request->all());
        return redirect()->route('offer_courses.index')->withMessage('Po updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfferCourse  $offerCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfferCourse $offerCourse)
    {
        $offerCourse->delete();
        return redirect()->route('offer_courses.index')->withMessage('offerCourse deleted success');
    }
}
