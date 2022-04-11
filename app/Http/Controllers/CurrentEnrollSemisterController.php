<?php

namespace App\Http\Controllers;

use App\Models\CurrentEnrollSemister;
use Illuminate\Http\Request;

class CurrentEnrollSemisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentEnrollSemisters = CurrentEnrollSemister::get();
        return view('backend.current_semister.index', compact('currentEnrollSemisters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.current_semister.create');
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


        CurrentEnrollSemister::create($data);

        return redirect()->route('current_semister.index')->withMessage('Semister added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CurrentEnrollSemister  $currentEnrollSemister
     * @return \Illuminate\Http\Response
     */
    public function show(CurrentEnrollSemister $currentEnrollSemister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CurrentEnrollSemister  $currentEnrollSemister
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrentEnrollSemister $currentEnrollSemister)
    {
        return view('backend.current_semister.edit', compact('currentEnrollSemister'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CurrentEnrollSemister  $currentEnrollSemister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CurrentEnrollSemister $currentEnrollSemister)
    {
        $currentEnrollSemister->update($request->all());
        return redirect()->route('current_semister.index')->withMessage('Semister updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CurrentEnrollSemister  $currentEnrollSemister
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrentEnrollSemister $currentEnrollSemister)
    {
        $currentEnrollSemister->delete();
        return redirect()->route('current_semister.index')->withMessage('Semister deleted success');
    }
}
