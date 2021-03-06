<?php

namespace App\Http\Controllers;

use App\Models\OfferCourse;
use App\Models\Po;
use Illuminate\Http\Request;
use App\Models\PoMarkDistribution;

class PoMarkDistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poMarkDistribution = PoMarkDistribution::get();
        return view('backend.pomark-distribution.index', compact('poMarkDistribution'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $offerCourses       = OfferCourse::get();
        $pos                = Po::where('status_06', '1')->get();
        return view('backend.pomark-distribution.create', compact('offerCourses', 'pos'));
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

        PoMarkDistribution::create($data);

        return redirect()->route('pomark-distributions.index')->withMessage('Enroll Student added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PoMarkDistribution  $poMarkDistribution
     * @return \Illuminate\Http\Response
     */
    public function show(PoMarkDistribution $poMarkDistribution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PoMarkDistribution  $poMarkDistribution
     * @return \Illuminate\Http\Response
     */
    public function edit( $cid)
    {
        $offerCourses       = OfferCourse::get();
        $pos                = Po::where('status_06', '1')->get();

        $pomarkDistribution = PoMarkDistribution::where('cid_11',$cid)->first();

        return view('backend.pomark-distribution.edit', compact('offerCourses', 'pomarkDistribution', 'pos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoMarkDistribution  $poMarkDistribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cid)
    {
        PoMarkDistribution::where('cid_11', $cid)->update($request->except('_token', '_method'));
        return redirect()->back()->withMessage('update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoMarkDistribution  $poMarkDistribution
     * @return \Illuminate\Http\Response
     */
    public function destroy($cid)
    {
        PoMarkDistribution::where('cid_11', $cid)->delete();
        return redirect()->back()->withMessage('delete success');
    }
}
