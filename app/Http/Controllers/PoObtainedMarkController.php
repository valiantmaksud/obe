<?php

namespace App\Http\Controllers;

use App\Models\Po;
use App\Models\Student;
use App\Models\OfferCourse;
use Illuminate\Http\Request;
use App\Models\PoObtainedMark;

class PoObtainedMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poObtainedMark = PoObtainedMark::get();
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
        $pos                = Po::where('status_06', '1')->get();

        return view('backend.po-obtainedmark.create', compact('offerCourses', 'students', 'pos'));
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

        if (PoObtainedMark::where('cid_11', $request->cid_11)->where('studentid', $request->studentid)->where('po', $request->po)->first()) {
            return redirect()->back()->withError('Obtained mark already generate for this student');
        }

        PoObtainedMark::create($data);

        return redirect()->route('po-obtained-mark.index')->withMessage('Obtained mark added success');
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
    public function edit( $cid)
    {
        $offerCourses       = OfferCourse::get();
        $students           = Student::get();
        $pos                = Po::where('status_06', '1')->get();
        $poObtainedMark     = PoObtainedMark::where('cid_11', $cid)->first();

        return view('backend.po-obtainedmark.edit', compact('offerCourses', 'students', 'poObtainedMark', 'pos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoObtainedMark  $poObtainedMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cid)
    {
        PoObtainedMark::where('cid_11', $cid)->update($request->except('_token', '_method'));
        return redirect()->back()->withMessage('update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoObtainedMark  $poObtainedMark
     * @return \Illuminate\Http\Response
     */
    public function destroy( $cid)
    {
        PoObtainedMark::where('cid_11', $cid)->delete();
        return redirect()->back()->withMessage('delete success');
    }







    public function studentPo(Request $request)
    {
        $data = [];
        if ($request->filled('student_id')) {
            $data['poObtainedMarks'] = PoObtainedMark::whereHas('student', function ($query) use ($request) {
                $query->where('studentid', $request->student_id);
            })->get()->groupBy('po');
            $data['student'] = Student::where('studentid', $request->student_id)->first();
        }


        return view('backend.final-outcomes.index', $data);
    }






    public function studentPoCourseWise(Request $request)
    {
        $data = [];
        if ($request->filled('coursecode') || $request->filled('semister') || $request->filled('year')) {

            $data['poObtainedMarks'] = PoObtainedMark::query()
            ->whereHas('offer', function($query) use($request){

                $query->when($request->filled('coursecode'), function ($query) use ($request) {
                    $query->where('coursecode', $request->coursecode);
                })
                ->when($request->filled('year'), function ($query) use ($request) {
                    $query->where('year', $request->year);
                })
                ->when($request->filled('semister'), function ($query) use ($request) {
                    $query->where('semister', $request->semister);
                })->where('status_11', '1');
            })
                ->where('status_20', '1')->get()->groupBy('po');
        }


        return view('backend.final-outcomes.course-wise', $data);
    }






    public function studentPoBatchWise(Request $request)
    {
        $data = [];
        if ($request->filled('batch_no')) {
            $data['poObtainedMarks'] = Student::whereHas('obtainedMark', function ($query) {
                $query->whereHas('offer', function ($query) {
                    $query->where('status_11', '1');
                });
            })
                ->with('obtainedMarks')
                ->where('batch', $request->batch_no)
                ->get();
        }


        return view('backend.final-outcomes.batch-wise', $data);
    }
}
