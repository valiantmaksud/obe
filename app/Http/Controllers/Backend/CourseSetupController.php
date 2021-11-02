<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CourseSetup;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseSetups = CourseSetup::with('course')->latest()->get();
        return view('backend.course.setup.index', compact('courseSetups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = CourseSetup::get();
        return view('backend.course.setup.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_codes.*'    => 'required',
            'course_names.*'    => 'required',
            'cos.*'             => 'required',
            'pos.*'             => 'required',
            'total_marks.*'     => 'required',
        ]);

        foreach ($request->course_codes as $key => $item) {
            $course_id  = $this->firstOrCreate($request->course_names[$key], $item);

            CourseSetup::firstOrCreate([
                'course_id' => $course_id,
            ], [
                'co'        => $request->cos[$key],
                'po'        => $request->pos[$key],
                'marks'     => $request->total_marks[$key],
            ]);
        }

        return redirect()->route('course-setups.index')->with('message', 'Course Setup success !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseSetup  $courseSetup
     * @return \Illuminate\Http\Response
     */
    public function show(CourseSetup $courseSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseSetup  $courseSetup
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseSetup $courseSetup)
    {
        return view('backend.course.setup.edit', compact('courseSetup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseSetup  $courseSetup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseSetup $courseSetup)
    {
        $courseSetup->update($request->except('course_code', 'course_name'));


        /*
    |---------------------------------------------
    | Update Course/Subject
    |---------------------------------------------
     */
        Subject::find($courseSetup->course_id)->update([
            'name'  => $request->course_name,
            'code'  => $request->course_code,
        ]);

        return redirect()->route('course-setups.index')->withMessage('Course Setup edited success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseSetup  $courseSetup
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseSetup $courseSetup)
    {
        $courseSetup->delete();
        return redirect()->route('course-setups.index')->withMessage('Course Setup deleted success!');
    }


    /*
    |---------------------------------------------
    | First Or Create Course/Subject
    |---------------------------------------------
     */
    public function firstOrCreate($name, $code)
    {
        return Subject::firstOrCreate([
            'name'  => $name,
            'code'  => $code,
        ])->id;
    }
}
