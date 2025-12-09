<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalBooks = Book::count();

        // Calculate books added this month
        $booksThisMonth = Book::whereMonth('created_at', now()->month)
                              ->whereYear('created_at', now()->year)
                              ->count();
        
        // Calculate books added last month
        $booksLastMonth = Book::whereMonth('created_at', now()->subMonth()->month)
                              ->whereYear('created_at', now()->subMonth()->year)
                              ->count();


        // Calculate percentage increase
        $percentageIncrease = 0;
        if ($booksLastMonth > 0) {
            $percentageIncrease = round((($booksThisMonth - $booksLastMonth) / $booksLastMonth) * 100, 1);
        } elseif ($booksThisMonth > 0) {
            $percentageIncrease = 100;
        }

        return view('admin.dashboard', compact('totalBooks', 'percentageIncrease'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
