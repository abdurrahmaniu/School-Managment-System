<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Teacher;
class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accountModel = new Account();
        $totalAccounts = $accountModel->count();
        $studentModel = new Student();
        $totalStudents = $studentModel->count();
        $teacherModel = new Teacher();
        $totalTeachers = $teacherModel->count();
       return view('TeacherDashboard',compact('totalAccounts','totalStudents','totalTeachers'));
        
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
        $teachers = new Teacher($request->validate([
            'firstname' => 'required',
            'secondname' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'Subject' => 'required',
            'phonenumber' => 'required',
            'Address' => 'required'
        ]));
        $teachers->save();
        return redirect('teachers');
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
    public function edit(Teacher $teachers)
    {
        return view('updateTeacher',['teachers'=>$teachers]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teachers)
    {
        $teachers->update($request->all());
        return redirect('teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teachers)
    {
        $teachers->delete();
        return redirect('teachers');
    }
}
