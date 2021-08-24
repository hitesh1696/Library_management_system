<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', ['students' => $students]);
    }

    public function create(Request $request)
    {
        $departments = Department::all();
        return view('students.add', ['departments' => $departments]);
    }

    public function store(StoreStudentRequest $request)
    {
        $student = Student::create($request->all());  
        return redirect()->route('student')->with('message', 'Student Added Successfully');
    }

    public function show(Student $id)
    {
        $student = Student::find($id->id);
        return view('students.show',['student' => $student]);
    }

    
    public function edit(Student $id)
    {
        $student = Student::find($id)->first();
        $departments = Department::all();
        $student_id = $student->id;
        return view('students.edit',['student' => $student, 'student_id' => $student_id, 'departments' => $departments]);
    }

    
    public function update(Request $request, Student $id)
    {
        $id = $id->id;
        // dd($id);
        $students =  $request->all();
        $students = Student::where('id', $id)->first()->update($request->all());
        return redirect()->route('student')->with('message', 'Student Information Updated Successfully');
    }

    
    public function destroy(Student $student)
    {
         return Student::destroy($student);
    }
}
