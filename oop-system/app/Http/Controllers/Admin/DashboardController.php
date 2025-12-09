<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Student;
use App\Models\User; 
use App\Models\Transaction;  
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Existing counts
        $totalBooks = Book::count();
        $totalCategories = Category::count();
        $totalStudents = Student::count();
        $totalUsers = User::count();
        $totalTransactions = Transaction::active()->count();

        // Overdue transactions count
        $overdueTransactions = Transaction::overdue()->count();

        // Available books (books with isActive = 1)
        $availableBooks = Book::active()->count();
        
        // OR if you want books that are active AND not currently borrowed:
        // $borrowedBookIds = Transaction::active()->pluck('book_id')->toArray();
        // $availableBooks = Book::active()->whereNotIn('id', $borrowedBookIds)->count();

        // Calculate percentage increases (your existing logic)
        $bookPercentageIncrease = $this->calculatePercentageIncrease(Book::class);
        $categoryPercentageIncrease = $this->calculatePercentageIncrease(Category::class);
        $studentPercentageIncrease = $this->calculatePercentageIncrease(Student::class);
        $usersPercentageIncrease = $this->calculatePercentageIncrease(User::class);

        return view('admin.dashboard', compact(
            'totalBooks',
            'totalCategories',
            'totalStudents',
            'totalUsers',
            'totalTransactions',
            'overdueTransactions',
            'availableBooks',
            'bookPercentageIncrease',
            'categoryPercentageIncrease',
            'studentPercentageIncrease',
            'usersPercentageIncrease'
        ));
    }

    private function calculatePercentageIncrease($model)
    {
        $currentMonth = $model::whereMonth('created_at', Carbon::now()->month)
                              ->whereYear('created_at', Carbon::now()->year)
                              ->count();
        
        $lastMonth = $model::whereMonth('created_at', Carbon::now()->subMonth()->month)
                           ->whereYear('created_at', Carbon::now()->subMonth()->year)
                           ->count();

        if ($lastMonth == 0) {
            return $currentMonth > 0 ? 100 : 0;
        }

        return round((($currentMonth - $lastMonth) / $lastMonth) * 100);
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
