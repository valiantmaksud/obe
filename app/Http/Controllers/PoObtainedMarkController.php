<?php

namespace App\Http\Controllers;

use App\Models\OfferCourse;
use Illuminate\Http\Request;
use App\Models\PoObtainedMark;
use App\Models\Student;

class PoObtainedMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poObtainedMark = PoObtainedMark::latest()->get();
        return view('backend.po-obtainedmark.index', compact('poObtainedMark'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offerCourses       = OfferCourse::get();
        $students           = Student::get();
        return view('backend.po-obtainedmark.create', compact('offerCourses', 'students'));
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

        PoObtainedMark::create($data);

        return redirect()->route('po-obtained-mark.index')->withMessage('Enroll Student added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoObtainedMark  $poObtainedMark
     * @return \Illuminate\Http\Response
     */
    public function show(PoObtainedMark $poObtainedMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoObtainedMark  $poObtainedMark
     * @return \Illuminate\Http\Response
     */
    public function edit(PoObtainedMark $poObtainedMark)
    {
        $offerCourses       = OfferCourse::get();
        $students           = Student::get();
        return view('backend.po-obtainedmark.edit', compact('offerCourses', 'students', 'poObtainedMark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoObtainedMark  $poObtainedMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoObtainedMark $poObtainedMark)
    {
        $poObtainedMark->update($request->all());
        return redirect()->back()->withMessage('update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoObtainedMark  $poObtainedMark
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoObtainedMark $poObtainedMark)
    {
        $poObtainedMark->delete();
        return redirect()->back()->withMessage('delete success');
    }
}
