<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
const STUDENTS = '/students';

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'matric_no'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'citizenship'=>'required',
            'marital_status'=>'required',
            'religion'=>'required',
            'activity_status'=>'required',
            'current_year'=>'required',
            'id_no'=>'required',
            'email'=>'required'
        ]);
        $students = new Students([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'matric_no' => $request->get('matric_no'),
            'gender' => $request->get('gender'),
            'date_of_birth' => $request->get('date_of_birth'),
            'citizenship' => $request->get('citizenship'),
            'marital_status' => $request->get('marital_status'),
            'religion' => $request->get('religion'),
            'activity_status' => $request->get('activity_status'),
            'current_year' => $request->get('current_year'),
            'id_no' => $request->get('id_no'),
            'email' => $request->get('email')
        ]);
        $students->save();
        return redirect(STUDENTS)->with('success', 'Student Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Students::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Students::find($id);
        return view('students.edit', compact('students'));
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
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'matric_no'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'citizenship'=>'required',
            'marital_status'=>'required',
            'religion'=>'required',
            'activity_status'=>'required',
            'current_year'=>'required',
            'id_no'=>'required',
            'email'=>'required'
        ]);
        $students = Students::find($id);
        $students->first_name =  $request->get('first_name');
        $students->last_name = $request->get('last_name');
        $students->matric_no = $request->get('matric_no');
        $students->gender = $request->get('gender');
        $students->date_of_birth =$request->get('date_of_birth');
        $students->citizenship =$request->get('citizenship');
        $students->marital_status =$request->get('marital_status');
        $students->religion = $request->get('religion');
        $students->activity_status = $request->get('activity_status');
        $students->current_year =$request->get('current_year');
        $students->id_no =$request->get('id_no');
        $students->email = $request->get('email');
        $students->save();
        return redirect(STUDENTS)->with('success', 'Student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Students::find($id);
        $students->delete();
        return redirect(STUDENTS)->with('success', 'Student Deleted!');
    }
}
