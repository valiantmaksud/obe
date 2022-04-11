<?php

namespace App\Http\Controllers;

use App\Models\CurrentMarkEntrySemister;
use Illuminate\Http\Request;

class CurrentMarkEntrySemisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentMarkEntrySemisters = CurrentMarkEntrySemister::get();
        return view('backend.mark_entry.index', compact('currentMarkEntrySemisters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.mark_entry.create');
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


        CurrentMarkEntrySemister::create($data);

        return redirect()->route('current_mark_entry_semister.index')->withMessage('Mark Entry added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CurrentMarkEntrySemister  $currentMarkEntrySemister
     * @return \Illuminate\Http\Response
     */
    public function show(CurrentMarkEntrySemister $currentMarkEntrySemister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CurrentMarkEntrySemister  $currentMarkEntrySemister
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrentMarkEntrySemister $currentMarkEntrySemister)
    {
        return view('backend.mark_entry.edit', compact('currentMarkEntrySemister'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CurrentMarkEntrySemister  $currentMarkEntrySemister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CurrentMarkEntrySemister $currentMarkEntrySemister)
    {
        $currentMarkEntrySemister->update($request->all());
        return redirect()->route('current_mark_entry_semister.index')->withMessage('Mark Entry updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CurrentMarkEntrySemister  $currentMarkEntrySemister
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrentMarkEntrySemister $currentMarkEntrySemister)
    {
        $currentMarkEntrySemister->delete();
        return redirect()->route('current_mark_entry_semister.index')->withMessage('Mark Entry deleted success');
    }
}
