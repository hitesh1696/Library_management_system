<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $students = Student::all();
        return view('departments.index', ['departments' => $departments]);
    }

    public function create(Request $request)
    {
        return view('departments.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $department = Department::create([
            'name' => $request->name,
        ]);
        return redirect()->route('department');
    }
    
    public function edit(Department $id)
    {
        $department = Department::find($id)->first();
        return view('departments.edit',['department'=> $department]);
    }
     
    public function show(Department $id)
    {
        return Student::find($id);
    }

    public function update(Request $request, Department $id)
    {
        $did = $id->id;
        $departments =  $request->validate([
            'name' => 'required|string',
        ]);
        $departments = Department::where('id', $did)->first()->update($request->all());
        return redirect()->route('department');
    }
}
