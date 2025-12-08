<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TransactionController;
use App\Models\Transaction;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route for BookController
Route::resource('books', BookController::class);

// Route for CategoryController
Route::resource('categories', CategoryController::class);

// Route for StudentsController
Route::resource('students', StudentController::class);

// Route for TransactionController
Route::resource('transactions', TransactionController::class);

require __DIR__.'/auth.php';
