@extends('admin.layouts.master')

@section('title')
    Category | Library Management System
@endsection

@section('contents')
<!-- Start:: row-10 -->
    <div class="row">
        <div class="col-xl-11 mt-5 mx-auto">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column-stacked-icon lucide-chart-column-stacked ml-2 side-menu__icon">
                            <path d="M11 13H7"/>
                            <path d="M19 9h-4"/>
                            <path d="M3 3v16a2 2 0 0 0 2 2h16"/>
                            <rect x="15" y="5" width="4" height="12" rx="1"/>
                            <rect x="7" y="8" width="4" height="9" rx="1"/>
                        </svg>
                        Category
                    </div>
                    <div class="prism-toggle">
                        <a class="btn btn-sm btn-primary-light" href="{{route('categories.create')}}">Add Category</a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr class="table-primary">
                                        <th scope="row">{{$category->name}}</th>
                                        <td>{{$category->isActive ? 'Active' : 'Inactive'}}</td>
                                        <td>{{ \Carbon\Carbon::parse($category->date_added)->format('Y-m-d') }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-success btn-wave" href="{{route('categories.edit', $category->id)}}">
                                                <i class="ri-pencil-line align-middle me-2 d-inline-block"></i>Edit
                                            </a>

                                            <form action="{{route('categories.destroy', $category->id)}}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger btn-wave">
                                                    <i class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                </button>
                                            </form>
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