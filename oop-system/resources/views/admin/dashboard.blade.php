@extends('admin.layouts.master')

@section('title')
    Dashboard
@endsection

@section('contents')
<div class="container-fluid">

    <!-- Start::page-header -->
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2">
        <div class="d-flex align-items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard-icon lucide-layout-dashboard" style="margin-left: 16px;">
                <rect width="7" height="9" x="3" y="3" rx="1"/>
                <rect width="7" height="5" x="14" y="3" rx="1"/>
                <rect width="7" height="9" x="14" y="12" rx="1"/>
                <rect width="7" height="5" x="3" y="16" rx="1"/>
            </svg>
            <h1 class="page-title fw-medium fs-25 mb-0">Dashboard</h1>
        </div>
    </div>
    <!-- End::page-header -->

    <!-- Start:: row-1 -->
    <div class="row mt-4">
        <!-- Total Books Card -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card custom-card shadow-sm border-0 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1 fs-14 fw-medium">Total Books</p>
                            <h3 class="mb-0 fw-bold">{{ number_format($totalBooks) }}</h3>
                            <span class="badge {{ $bookPercentageIncrease >= 0 ? 'bg-success-transparent text-success' : 'bg-danger-transparent text-danger' }} mt-2">
                                <i class="bi bi-arrow-{{ $bookPercentageIncrease >= 0 ? 'up' : 'down' }} me-1"></i>{{ abs($bookPercentageIncrease) }}% this month
                            </span>
                        </div>
                        <div class="dashboard-icon-wrapper bg-primary-transparent rounded-circle p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                                <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-primary-transparent border-0 py-2">
                    <a href="{{route('books.index')}}" class="text-primary text-decoration-none fs-13 fw-medium d-flex align-items-center justify-content-center">
                        View All Books
                        <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Total Categories Card -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card custom-card shadow-sm border-0 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1 fs-14 fw-medium">Total Categories</p>
                            <h3 class="mb-0 fw-bold">{{number_format($totalCategories)}}</h3>
                            <span class="badge {{ $categoryPercentageIncrease >= 0 ? 'bg-success-transparent text-success' : 'bg-danger-transparent text-danger' }} mt-2">
                                <i class="bi bi-arrow-{{ $categoryPercentageIncrease >= 0 ? 'up' : 'down' }} me-1"></i>{{ abs($categoryPercentageIncrease) }}% this month
                            </span>
                        </div>
                        <div class="dashboard-icon-wrapper bg-success-transparent rounded-circle p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                                <path d="M3 3h7v7H3z"/>
                                <path d="M14 3h7v7h-7z"/>
                                <path d="M14 14h7v7h-7z"/>
                                <path d="M3 14h7v7H3z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-success-transparent border-0 py-2">
                    <a href="{{route('categories.index')}}" class="text-success text-decoration-none fs-13 fw-medium d-flex align-items-center justify-content-center">
                        Manage Categories
                        <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Total Students Card -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card custom-card shadow-sm border-0 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1 fs-14 fw-medium">Total Students</p>
                            <h3 class="mb-0 fw-bold">{{number_format($totalStudents)}}</h3>
                            <span class="badge {{ $studentPercentageIncrease >= 0 ? 'bg-success-transparent text-success' : 'bg-danger-transparent text-danger' }} mt-2">
                                <i class="bi bi-arrow-{{ $studentPercentageIncrease >= 0 ? 'up' : 'down' }} me-1"></i>{{ abs($studentPercentageIncrease) }}% this month
                            </span>
                        </div>
                        <div class="dashboard-icon-wrapper bg-warning-transparent rounded-circle p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-warning-transparent border-0 py-2">
                    <a href="{{route('students.index')}}" class="text-warning text-decoration-none fs-13 fw-medium d-flex align-items-center justify-content-center">
                        View All Students
                        <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Total Users Card -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card custom-card shadow-sm border-0 overflow-hidden">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted mb-1 fs-14 fw-medium">Total Admins</p>
                            <h3 class="mb-0 fw-bold">{{number_format($totalUsers)}}</h3>
                            <span class="badge {{ $usersPercentageIncrease >= 0 ? 'bg-success-transparent text-success' : 'bg-danger-transparent text-danger' }} mt-2">
                                <i class="bi bi-arrow-{{ $usersPercentageIncrease >= 0 ? 'up' : 'down' }} me-1"></i>{{ abs($usersPercentageIncrease) }}% this month
                            </span>
                        </div>
                        <div class="dashboard-icon-wrapper bg-danger-transparent rounded-circle p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <polyline points="16 11 18 13 22 9"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-danger-transparent border-0 py-2">
                    <a href="{{route('users.index')}}" class="text-danger text-decoration-none fs-13 fw-medium d-flex align-items-center justify-content-center">
                        Manage Admins
                        <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-1 -->

    <!-- Start:: row-2 - Additional Stats -->
    <div class="row">
        <!-- Active Transactions Card -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card custom-card shadow-sm border-0">
                <div class="card-header bg-transparent border-bottom d-flex align-items-center justify-content-between">
                    <h6 class="card-title mb-0 fw-semibold">Active Transactions</h6>
                    <span class="badge bg-primary">Live</span>
                </div>
                <div class="card-body text-center py-4">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-primary">
                            <path d="M21 12V7H5a2 2 0 0 1 0-4h14v4"/>
                            <path d="M3 5v14a2 2 0 0 0 2 2h16v-5"/>
                            <path d="M18 12a2 2 0 0 0 0 4h4v-4Z"/>
                        </svg>
                    </div>
                    <h2 class="fw-bold mb-1">{{number_format($totalTransactions)}}</h2>
                    <p class="text-muted mb-0">Books Currently Borrowed</p>
                </div>
            </div>
        </div>

        <!-- Overdue Books Card -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card custom-card shadow-sm border-0">
                <div class="card-header bg-transparent border-bottom d-flex align-items-center justify-content-between">
                    <h6 class="card-title mb-0 fw-semibold">Overdue Books</h6>
                    <span class="badge bg-danger">Alert</span>
                </div>
                <div class="card-body text-center py-4">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h2 class="fw-bold mb-1 text-danger">23</h2>
                    <p class="text-muted mb-0">Need Immediate Attention</p>
                </div>
            </div>
        </div>

        <!-- Available Books Card -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card custom-card shadow-sm border-0">
                <div class="card-header bg-transparent border-bottom d-flex align-items-center justify-content-between">
                    <h6 class="card-title mb-0 fw-semibold">Available Books</h6>
                    <span class="badge bg-success">Ready</span>
                </div>
                <div class="card-body text-center py-4">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                        </svg>
                    </div>
                    <h2 class="fw-bold mb-1 text-success">1,089</h2>
                    <p class="text-muted mb-0">Ready to be Borrowed</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-2 -->

</div>

<style>
.dashboard-icon-wrapper {
    width: 64px;
    height: 64px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.custom-card {
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

.custom-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.card-footer a:hover {
    text-decoration: underline !important;
}

.badge {
    font-size: 0.75rem;
    padding: 0.35em 0.65em;
}
</style>
@endsection