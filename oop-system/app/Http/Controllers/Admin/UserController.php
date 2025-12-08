<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        
        return view('admin.users.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'student_id' => 'required|unique:users,student_id,' . $user->id, // Changed from exists:students
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'course' => 'required|string|max:255',
            'year_level' => 'required|string|max:50'
        ]);

        // Map form field names to database column names
        $user->update([
            'student_id' => $validated['student_id'],
            'lastname' => $validated['last_name'],      // Form: last_name → DB: lastname
            'firstname' => $validated['first_name'],     // Form: first_name → DB: firstname
            'middlename' => $validated['middle_name'],   // Form: middle_name → DB: middlename
            'email' => $validated['email'],
            'course' => $validated['course'],
            'year_level' => $validated['year_level'],
        ]);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        
        // Prevent user from deleting their own account
        if ($user->id == Auth::id()) {
            return redirect()->route('users.index')
                ->with('error', 'You cannot delete your own account!');
        }
        
        // Optional: Check if user has any active transactions
        // if ($user->transactions()->where('status', 'borrowed')->exists()) {
        //     return redirect()->route('users.index')
        //         ->with('error', 'Cannot delete user with active transactions!');
        // }
        
        $user->delete();
        
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully!');
    }
}