<?php

namespace App\Http\Controllers;

use App\Models\departments;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = \App\Models\departments::all();
        return view('department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'office' => 'nullable|string|max:255', // optional field
        ]);

        // Create new department
        departments::create([
            'name' => $request->name,
            'office' => $request->office,
        ]);

        // Redirect back to index with success message (optional)
        return redirect()->route('departments')->with('success', 'Department added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $department = departments::findOrFail($id);
        return view('department.show', compact('department'));
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
