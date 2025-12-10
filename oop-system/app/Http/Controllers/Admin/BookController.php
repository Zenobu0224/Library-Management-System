<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Book::query();
        
        // Check if status filter is applied
        if ($request->has('status') && !empty($request->status)) {
            $statuses = $request->status;
            
            // If both active and inactive are selected, show all
            if (count($statuses) == 2) {
                // Show all books (no filter needed)
            } else {
                // Filter by selected status
                $query->whereIn('isActive', $statuses);
            }
        }
        
        $books = $query->get();

        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'isbn' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'isActive' => 'required',
            'date_added' => 'required'
        ]);

        $validated['isActive'] = (int) $validated['isActive'];

        Book::create($validated);

        return redirect()->route('books.index')
            ->with('Success', 'Book added successfully');
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
        $book = Book::findOrFail($id);
        $categories = Category::all(); // fetch all categories

        return view('admin.books.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required',
            'isbn' => 'required',
            'author' => 'required',
            'category_id' => 'required',
            'isActive' => 'required',
            'date_added' => 'required'
        ]);

        $validated['isActive'] = (int) $validated['isActive'];

        $book->update($validated); // Changed from create to update

        return redirect()->route('books.index')
            ->with('Success', 'Book updated successfully'); // Changed message
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')
            ->with('Success', 'Book removed successfully!');
    }
}
