<?php

namespace App\Http\Controllers;

use App\Models\MarkDistribution;
use App\Models\OfferCourse;
use Illuminate\Http\Request;

class MarkDistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $markDistributions  = MarkDistribution::get();
        $offerCourses       = OfferCourse::get();
        return view('backend.mark-distribution.index', compact('markDistributions', 'offerCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offerCourses       = OfferCourse::get();
        return view('backend.mark-distribution.create', compact('offerCourses'));
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

        MarkDistribution::create($data);

        return redirect()->route('mark-distributions.index')->withMessage('Mark distribution added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MarkDistribution  $markDistribution
     * @return \Illuminate\Http\Response
     */
    public function show(MarkDistribution $markDistribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MarkDistribution  $markDistribution
     * @return \Illuminate\Http\Response
     */
    public function edit(MarkDistribution $markDistribution)
    {
        $offerCourses       = OfferCourse::get();
        return view('backend.mark-distribution.edit', compact('markDistribution', 'offerCourses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MarkDistribution  $markDistribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MarkDistribution $markDistribution)
    {
        $markDistribution->update($request->all());
        return redirect()->route('mark-distributions.index')->withMessage('Mark distribution updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MarkDistribution  $markDistribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(MarkDistribution $markDistribution)
    {
        $markDistribution->delete();
        return redirect()->route('mark-distributions.index')->withMessage('Mark distribution deleted success');
    }
}
