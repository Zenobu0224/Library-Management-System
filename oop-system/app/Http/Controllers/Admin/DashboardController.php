<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Student;
use App\Models\User; 
use App\Models\Transaction;  

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // BOOKS
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
        $bookPercentageIncrease = 0;
        if ($booksLastMonth > 0) {
            $bookPercentageIncrease = round((($booksThisMonth - $booksLastMonth) / $booksLastMonth) * 100, 1);
        } elseif ($booksThisMonth > 0) {
            $bookPercentageIncrease = 100;
        }

        // CATEGORIES
        $totalCategories = Category::count();

        // Calculate categories added this month
        $categoriesThisMonth = Category::whereMonth('created_at', now()->month)
                              ->whereYear('created_at', now()->year)
                              ->count();
        
        // Calculate categories added last month
        $categoriesLastMonth = Category::whereMonth('created_at', now()->subMonth()->month)
                              ->whereYear('created_at', now()->subMonth()->year)
                              ->count();


        // Calculate percentage increase
        $categoryPercentageIncrease = 0;
        if ($categoriesLastMonth > 0) {  
            $categoryPercentageIncrease = round((($categoriesThisMonth - $categoriesLastMonth) / $categoriesLastMonth) * 100, 1);
        } elseif ($categoriesThisMonth > 0) {
            $categoryPercentageIncrease = 100;
        }

        // STUDENTS
        $totalStudents = Student::count();

        // Calculate categories added this month
        $studentsThisMonth = Student::whereMonth('created_at', now()->month)
                              ->whereYear('created_at', now()->year)
                              ->count();
        
        // Calculate categories added last month
        $studentsLastMonth = Student::whereMonth('created_at', now()->subMonth()->month)
                              ->whereYear('created_at', now()->subMonth()->year)
                              ->count();


        // Calculate percentage increase
        $studentPercentageIncrease = 0;
        if ($studentsLastMonth > 0) {  
            $studentPercentageIncrease = round((($studentsThisMonth - $studentsLastMonth) / $studentsLastMonth) * 100, 1);
        } elseif ($studentsThisMonth > 0) {
            $studentPercentageIncrease = 100;
        }

        // USERS
        $totalUsers = User::count();

        // Calculate users added this month
        $usersThisMonth = User::whereMonth('created_at', now()->month)
                              ->whereYear('created_at', now()->year)
                              ->count();
        
        // Calculate users added last month
        $usersLastMonth = User::whereMonth('created_at', now()->subMonth()->month)
                              ->whereYear('created_at', now()->subMonth()->year)
                              ->count();


        // Calculate percentage increase
        $usersPercentageIncrease = 0;
        if ($usersLastMonth > 0) {  
            $categoryPercentageIncrease = round((($usersThisMonth - $usersLastMonth) / $usersLastMonth) * 100, 1);
        } elseif ($usersThisMonth > 0) {
            $usersPercentageIncrease = 100;
        }


        // TRANSACTIONS
        $totalTransactions = Transaction::count();

        // OVERDUE BOOKS
        $overdueBooks = Transaction::where('status', 'borrowed')
                           ->where('due_date', '<', now())
                           ->count();

        return view('admin.dashboard',  compact('totalBooks', 'bookPercentageIncrease',
                                                'totalCategories', 'categoryPercentageIncrease',
                                                'totalStudents', 'studentPercentageIncrease',
                                                'totalUsers', 'usersPercentageIncrease',
                                                'totalTransactions'));
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
