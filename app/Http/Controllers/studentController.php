<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = new Student();
        $totalStudent = $students->count();
        $accountModel = new Account();
        $totalAccount = $accountModel->count();
        $teacherModel = new Teacher();
        $totalTeacher = $teacherModel->count();
        return view('dashboard',compact('totalStudent','totalAccount','totalTeacher'));
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
        $students = new Student($request->validate([
            'firstname' => 'required',
            'secondname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'class' => 'required',
            'phonenumber' => 'required',
            'Address' => 'required'
        ]));
        $students->save();
        return redirect('MainDashboard');
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
    public function edit(Student $students)
    {
        return view('updateStudent',['students'=>$students]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $students)
    {
        $students->update($request->all());
        return redirect('MainDashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $students)
    {
        $students->delete();
        return redirect('MainDashboard');
    }
}
