@extends('admin.layouts.master')

@section('title')
Users | Library Management
@endsection

@section('contents')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<!-- Start:: row-10 -->
<div class="row">
    <div class="col-xl-11 mt-5 mx-auto">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users ml-2 side-menu__icon">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                    </svg>
                    Users
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Student ID</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Firstname</th>
                                <th scope="col">Middlename</th>
                                <th scope="col">Email</th>
                                <th scope="col">Course</th>
                                <th scope="col">Year Level</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->student_id }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->firstname }}</td>
                                    <td>{{ $user->middlename ?? 'N/A' }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->course }}</td>
                                    <td>{{ $user->year_level }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">
                                            Edit
                                        </a>
                                        
                                        @if($user->id !== auth()->id())
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" 
                                                        onclick="return confirm('Are you sure you want to delete this user?')">
                                                    Delete
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer d-none border-top-0">
            </div>
        </div>
    </div>
</div>
<!-- End:: row-10 -->
@endsection