<?php

namespace App\Http\Controllers;

use App\Models\OfferCourse;
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
        $poMarkDistribution = PoMarkDistribution::latest()->get();
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
        return view('backend.pomark-distribution.create', compact('offerCourses'));
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
    public function edit(PoMarkDistribution $poMarkDistribution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PoMarkDistribution  $poMarkDistribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PoMarkDistribution $poMarkDistribution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PoMarkDistribution  $poMarkDistribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(PoMarkDistribution $poMarkDistribution)
    {
        //
    }
}
