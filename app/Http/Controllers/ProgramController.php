<?php

namespace App\Http\Controllers;

use App\Models\DeptInfo;
use App\Models\Institute;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProgramController extends Controller
{

    public function index()
    {
        $programs = Program::get();
        return view('backend.programs.index', compact('programs'));
    }


    public function create()
    {
        $data['depts'] = DeptInfo::pluck('deptname','deptcode');
        $data['inst'] = Institute::pluck('institutename', 'institutecode');

        return view('backend.programs.create', $data);
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

    public function edit($programcode)
    {
        $data['program']  = Program::where('programcode', $programcode)->first();
        $data['depts'] = DeptInfo::pluck('deptname','deptcode');
        $data['inst'] = Institute::pluck('institutename', 'institutecode');

        return view('backend.programs.edit', $data);
    }


    public function update(Request $request, $programcode)
    {
       Program::where('programcode', $programcode)->update($request->except('_token', '_method'));

        return redirect()->route('programs.index')->withMessage('Program updated success');
    }


    public function destroy($program)
    {
        Program::where('programcode', $program)->delete();
        return redirect()->back()->withMessage('delete success');
    }
}
