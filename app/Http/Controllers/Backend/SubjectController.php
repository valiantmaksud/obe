<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index()
    {
        return view('backend.subjects.index', [
            'subjects'  => Subject::latest()->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required',
            'code'  => 'required|unique:subjects,code'
        ]);
        try {
            Subject::firstOrCreate($data);
        } catch (\Throwable $th) {
            return redirect()->back()->withError($th->getMessage());
        }
        return redirect()->back()->withMessage('subject added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name'  => 'required',
            'code'  => 'required|unique:subjects,code'
        ]);
        try {
            Subject::find($id)->update($data);
        } catch (\Throwable $th) {
            return redirect()->back()->withError($th->getMessage());
        }
        return redirect()->back()->withMessage('subject update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        try {
            $subject->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->withError($th->getMessage());
        }
        return redirect()->back()->withMessage('subject delete success');
    }
}
