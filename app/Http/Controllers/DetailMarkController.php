<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\DetailMark;
use App\Models\OfferCourse;
use Illuminate\Http\Request;

class DetailMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailMark = DetailMark::paginate(25);
        return view('backend.detail-mark.index', compact('detailMark'));
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

        return view('backend.detail-mark.create', compact('offerCourses', 'students'));
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

        DetailMark::create($data);

        return redirect()->route('detail-marks.index')->withMessage('Detail Mark added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailMark  $detailMark
     * @return \Illuminate\Http\Response
     */
    public function show(DetailMark $detailMark)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailMark  $detailMark
     * @return \Illuminate\Http\Response
     */
    public function edit( $cid)
    {
        $offerCourses       = OfferCourse::get();
        $students           = Student::get();
        $detailMark         = DetailMark::where('cid_11',$cid)->first();
        return view('backend.detail-mark.edit', compact('offerCourses', 'students', 'detailMark'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailMark  $detailMark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $cid)
    {
        DetailMark::where('cid_11', $cid)->update($request->except('_token', '_method'));
        return redirect()->route('detail-marks.index')->withMessage('Detail Mark update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailMark  $detailMark
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid)
    {
        DetailMark::where('cid_11', $cid)->delete();
        return redirect()->route('detail-marks.index')->withMessage('Detail Mark deleted success');
    }
}
