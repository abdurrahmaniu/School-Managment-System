<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountModel = new Account();
        $totalAccount = $accountModel->count();
        $studentModel = new Student();
        $totalStudents = $studentModel->count();
        $teacherModel = new Teacher();
        $totalTeacher = $teacherModel->count(); 
        return view('subjectDashboard', compact('totalAccount','totalStudents','totalTeacher'));
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
        $subjects = new Subject($request->validate([
            'subject'=>'required',
            'teacher'=>'required',
            'class'=>'required'
        ]));
        $subjects->save();
        return redirect('subject');
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
    public function edit(Subject $subjects)
    {
        return view('updateSubject',['subjects'=>$subjects]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subjects)
    {
        $subjects->update($request->all());
        return redirect('subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subjects)
    {
        $subjects->delete();
        return redirect('subject');
    }
}
