<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProgramController extends Controller
{

    public function index()
    {
        $programs = Program::latest()->get();
        return view('backend.programs.index', compact('programs'));
    }


    public function create()
    {
        return view('backend.programs.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        Program::create($data);
        return redirect()->route('programs.index')->withMessage('Program created success');
    }


    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */

    public function edit(Program $program)
    {
        return view('backend.programs.edit', compact('program'));
    }


    public function update(Request $request, Program $program)
    {
        $program->update($request->all());
        return redirect()->route('programs.index')->withMessage('Program updated success');
    }


    public function destroy(Program $program)
    {
        //
    }
}
