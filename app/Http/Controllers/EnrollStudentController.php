<?php

namespace App\Http\Controllers;

use App\Models\OfferCourse;
use Illuminate\Http\Request;
use App\Models\EnrollStudent;
use App\Models\Student;

class EnrollStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrollStudents = EnrollStudent::paginate(25);
        return view('backend.enroll-students.index', compact('enrollStudents'));
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
        return view('backend.enroll-students.create', compact('offerCourses', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('studentid', 'enrolltype', 'status_13');

        $data['cid_11'] = $request->cid_11;

        EnrollStudent::create($data);

        return redirect()->route('enroll-students.index')->withMessage('Enroll Student added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EnrollStudent  $enrollStudent
     * @return \Illuminate\Http\Response
     */
    public function show(EnrollStudent $enrollStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EnrollStudent  $enrollStudent
     * @return \Illuminate\Http\Response
     */
    public function edit($cid)
    {
        $offerCourses       = OfferCourse::get();
        $students           = Student::get();
        $enrollStudent      = EnrollStudent::where('cid_11', $cid)->first();
        return view('backend.enroll-students.edit', compact('offerCourses', 'students', 'enrollStudent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EnrollStudent  $enrollStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cid)
    {
        EnrollStudent::where('cid_11', $cid)->update($request->except('_token', '_method'));
        return redirect()->route('enroll-students.index')->withMessage('Enroll student update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EnrollStudent  $enrollStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid)
    {
        EnrollStudent::where('cid_11', $cid)->delete();
        return redirect()->route('enroll-students.index')->withMessage('Enroll student deleted success');
    }
}
