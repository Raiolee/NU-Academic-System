<?php

namespace App\Http\Controllers;

use App\Models\instructors;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instructors = \App\Models\instructors::all();
        return view('instructor.index', compact('instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|max:255', // optional field
        ]);

        // Create new department
        instructors::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect back to index with success message (optional)
        return redirect()->route('instructors')->with('success', 'Instructor added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $instructor = instructors::findOrFail($id);
        return view('instructor.show', compact('instructor'));
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
