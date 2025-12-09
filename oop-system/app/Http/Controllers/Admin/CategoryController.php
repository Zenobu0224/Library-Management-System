<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::all();

        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'isActive' => 'required',
            'date_added' => 'required'
        ]);

        $validated['isActive'] = (int) $validated['isActive'];

        // Save to DB
        Category::create($validated);

        return redirect()->route('categories.index')
            ->with('Success', 'Category added successfully!');
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
        $category = Category::findOrFail($id);
        // dd($category);

        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'isActive' => 'required',
            'date_added' => 'required'
        ]);

        $validated['isActive'] = (int) $validated['isActive'];

        // Save to DB
        $category->update($validated);

        return redirect()->route('categories.index')
            ->with('Success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        
        // Check if category has any books
        if ($category->books()->count() > 0) {
            return redirect()->route('categories.index')
                ->with('error', 'Cannot delete category! It has ' . $category->books()->count() . ' book(s) associated with it.');
        }
        
        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'Category deleted successfully!');
    }
}
