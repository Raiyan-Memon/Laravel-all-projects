<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $student = Student::all();
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
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
            'name' => 'required ',
            'gender' => 'required',
            'hobby' => '',
            'state' => 'required',
        ]);

        $student = new Student;

        $student->name = $request->name;
        $student->description = $request->description;
        $student->gender = $request->gender;
        $student->hobby = $request->hobby;

        $student->state = $request->state;

        //handling hobby
        $hobby = implode(',', $request->hobby);
        $student->hobby = $hobby;

        $student->save();

        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($student)
    {
        $data = Student::find($student);
        return view('student.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($student)
    {
        $data = Student::find($student);
        return view('student.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student)
    {
        $student = Student::find($student);

        $student->name = $request->name;
        $student->description = $request->description;
        $student->gender = $request->gender;
        $student->state = $request->state;

        //handling hobby
        $hobby = implode(',', $request->hobby);
        $student->hobby = $hobby;

        $student->update();

        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($student)
    {
        $delete = Student::find($student);
        $delete->delete();
        return redirect('student');
    }
}
