<?php

namespace App\Http\Controllers;

use App\Imports\Student as ImportsStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students = Student::when($request->filled('studentid'), function ($q) use ($request) {
                $q->where('studentid', $request->studentid);
            })
            ->when($request->filled('studentname'), function ($q) use ($request) {
                $q->where('studentname', $request->studentid);
            })
            ->get();
        return view('backend.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->filled('file_upload')) {
            $this->bulkUpload($request);
        } else {
            $data = $request->all();

            Student::create($data);
        }

        return redirect()->route('students.index')->withMessage('Student added success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($studentid)
    {
        $student = Student::where('studentid',$studentid)->first();
        return view('backend.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $studentid)
    {
        $student = Student::where('studentid',$studentid)->first();
        $student->update($request->all());
        return redirect()->route('students.index')->withMessage('Student updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->withMessage('Student deleted success');
    }





    public function bulkUpload($request)
    {
        Excel::import(new ImportsStudent(), $request->file('csv_file'));
    }
}
