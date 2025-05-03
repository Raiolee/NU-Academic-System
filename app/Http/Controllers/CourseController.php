<?php

namespace App\Http\Controllers;

use App\Models\departments;
use App\Models\instructors;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = \App\Models\courses::with(['instructor', 'department'])->get();
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $instructors = instructors::all();
        $departments = departments::all();

        return view('courses.create', compact('instructors', 'departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'instructorID' => 'required|exists:instructors,instructorID',
            'departmentID' => 'required|exists:departments,departmentID',
            'credit' => 'required|integer|min:1|max:6',
        ]);

        \App\Models\courses::create($request->all());

        return redirect()->route('courses')->with('success', 'Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = \App\Models\courses::with(['instructor', 'department'])->findOrFail($id);
        return view('courses.show', compact('course'));
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
