<?php

namespace App\Http\Controllers;

use App\Models\Po;
use Illuminate\Http\Request;

class PoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pos = Po::get();
        return view('backend.pos.index', compact('pos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pos.create');
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


        Po::create($data);

        return redirect()->route('pos.index')->withMessage('Po added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Po  $po
     * @return \Illuminate\Http\Response
     */
    public function show(Po $po)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Po  $po
     * @return \Illuminate\Http\Response
     */
    public function edit($po)
    {
        $po = Po::where('po',$po)->first();
        return view('backend.pos.edit', compact('po'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Po  $po
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $po)
    {
        Po::where('po', $po)->update($request->except('_token', '_method'));
        return redirect()->route('pos.index')->withMessage('Po updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Po  $po
     * @return \Illuminate\Http\Response
     */
    public function destroy($po)
    {
        Po::where('po', $po)->delete();
        return redirect()->route('pos.index')->withMessage('Po deleted success');
    }
}
