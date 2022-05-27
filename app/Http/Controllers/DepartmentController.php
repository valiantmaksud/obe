<?php

namespace App\Http\Controllers;

use App\Models\OfferCourse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Traits\CheckPermission;
use App\Models\DeptInfo;

class DepartmentController extends Controller
{
    use CheckPermission;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\ResofferCoursense
     */
    public function index()
    {
        $depts = DeptInfo::get();
        return view('backend.departments.index', compact('depts'));
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
        $data = $request->only('deptcode', 'deptname');

        DeptInfo::create($data);

        return redirect()->route('departments.index')->withMessage('Dept added success');
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
        $dept = DeptInfo::where('deptcode',$code)->first();
        $dept->update($request->only('deptname', 'deptcode'));
        return redirect()->route('departments.index')->withMessage('Dept updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfferCourse  $offerCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        DeptInfo::where('deptcode',$code)->first()->delete();
        return redirect()->route('departments.index')->withMessage('Dept deleted success');
    }
}
