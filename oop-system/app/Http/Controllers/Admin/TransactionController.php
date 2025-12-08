<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Student;
use App\Models\Book;

use function PHPSTORM_META\map;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $transactions = Transaction::all();
        return view('admin.transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $transactions = Transaction::all();
        $students = Student::all();
        $books = Book::all();

        return view('admin.transactions.create', compact('transactions', 'students', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'txn_no' => 'required',
            'student_id' => 'required|exists:students,student_id',
            'book_id' => 'required|exists:books,id',
            'date_borrowed' => 'required|date',
            'due_date' => 'required|date|after:date_borrowed',
            'by' => 'required',
        ]);

        // Add date_added automatically
        $validated['date_added'] = now();

        Transaction::create($validated);

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction added successfully!');
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
