<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = \App\Models\students::with(['department'])->get();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = \App\Models\departments::all();
        return view('student.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'departmentID' => 'required|exists:departments,departmentID',
        ]);

        students::create([
            'name' => $request->name,
            'departmentID' => $request->departmentID,
        ]);

        return redirect()->route('students')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = students::with('department', 'courses')->findOrFail($id);
        return view('student.show', compact('student'));
    }

    public function showAssignForm($id)
    {
        $student = students::with('courses')->findOrFail($id);
        $courses = courses::all();
        return view('student.assign_courses', compact('student', 'courses'));
    }

    public function assignCourses(Request $request, $id)
    {
        $student = students::findOrFail($id);

        // Validate input
        $request->validate([
            'courses' => 'required|array',
            'courses.*' => 'exists:courses,courseID',
        ]);

        // Sync multiple courses using the array
        $student->courses()->sync($request->courses);

        return redirect()->route('student.show', $id)->with('success', 'Courses assigned.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
