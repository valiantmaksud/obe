<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\GradeResult;
use App\Models\OfferCourse;
use Illuminate\Http\Request;

class GradeResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gradeResult = GradeResult::paginate(25);
        return view('backend.grade-result.index', compact('gradeResult'));
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
        return view('backend.grade-result.create', compact('offerCourses', 'students'));
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


        // dd($data);

        GradeResult::create($data);

        return redirect()->route('grade-results.index')->withMessage('Enroll Student added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GradeResult  $gradeResult
     * @return \Illuminate\Http\Response
     */
    public function show(GradeResult $gradeResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GradeResult  $gradeResult
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeResult $gradeResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GradeResult  $gradeResult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GradeResult $gradeResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GradeResult  $gradeResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeResult $gradeResult)
    {
        //
    }
}
