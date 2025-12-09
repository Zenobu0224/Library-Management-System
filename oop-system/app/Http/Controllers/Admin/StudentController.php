<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::all();

        return view('admin.students.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'email' => 'required',
            'course' => 'required',
            'year_level' => 'required'
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
            ->with('Success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);

        return view('admin.students.edit', compact('student'));
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
        $student = Student::findOrFail($id);
        
        // Check if student has any transactions
        if ($student->transactions()->count() > 0) {
            return redirect()->route('students.index')
                ->with('error', 'Cannot delete student! This student has ' . $student->transactions()->count() . ' transaction(s) in the system.');
        }
        
        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Student removed successfully!');
    }
}
