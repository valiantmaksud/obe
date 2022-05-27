<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UserCSV;
use App\Models\DeptInfo;
use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::latest('userid')
            ->when($request->filled('username'), function ($q) use ($request) {
                $q->where('username', 'like', '%' . $request->username . '%');
            })
            ->where('userid', '!=', '1')
            ->get();

        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['depts']  = DeptInfo::pluck('deptname','deptcode');
        $data['inst']   = Institute::pluck('institutename', 'institutecode');
        return view('backend.users.create', $data);
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
            $data = $request->except('password');

            $data['password'] = Hash::make($request->password);

            User::create($data);
        }


        return redirect()->route('users.index')->withMessage('User created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(User $user)
    {
        $data['depts'] = DeptInfo::pluck('deptname','deptcode');
        $data['inst'] = Institute::pluck('institutename', 'institutecode');
        $data['user']   = $user;
        return view('backend.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index')->withMessage('User updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->withMessage('User deleted success');
    }





    public function bulkUpload($request)
    {
        Excel::import(new UserCSV(), $request->file('csv_file'));
    }
}
