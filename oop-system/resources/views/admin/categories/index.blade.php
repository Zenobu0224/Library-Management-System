@extends('admin.layouts.master')

@section('title')
    Category | Library Management System
@endsection

@section('contents')
<div class="col-xl-12 mt-2">
<div class="card custom-card">
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
    <div class="card-header justify-content-between">
        <div class="card-title">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column-stacked-icon lucide-chart-column-stacked ml-2 side-menu__icon">
                <path d="M11 13H7"/>
                <path d="M19 9h-4"/>
                <path d="M3 3v16a2 2 0 0 0 2 2h16"/>
                <rect x="15" y="5" width="4" height="12" rx="1"/>
                <rect x="7" y="8" width="4" height="9" rx="1"/>
            </svg>
            Categories
        </div>
        <div class="prism-toggle">
            <a class="btn btn-sm btn-primary-light" href="{{ route('categories.create') }}">Add Category</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table text-nowrap table-bordered">
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
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    {{ $category->name }}
                                </div>
                            </th>
                            <td><span class="badge {{ $category->isActive ? 'bg-success-transparent' : 'badge bg-light text-dark'}}">
                                {{ $category->isActive ? 'Active' : 'Inactive'}}
                            </span></td>
                            <td>{{ $category->date_added }}</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-icon btn-sm btn-success"><i class="ri-edit-line"></i></a>


                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-sm btn-danger">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="table-responsive"&gt;
    &lt;table class="table text-nowrap table-bordered"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th scope="col"&gt;User&lt;/th&gt;
                &lt;th scope="col"&gt;Status&lt;/th&gt;
                &lt;th scope="col"&gt;Email&lt;/th&gt;
                &lt;th scope="col"&gt;Action&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/13.jpg" alt="img"&gt;
                        &lt;/span&gt;Sukuro Kim
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;kimosukuro@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 offline avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/6.jpg" alt="img"&gt;
                        &lt;/span&gt;Hasimna
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;Inactive&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;hasimna2132@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/15.jpg" alt="img"&gt;
                        &lt;/span&gt;Azimo Khan
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;azimokhan421@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
            &lt;tr&gt;
                &lt;th scope="row"&gt;
                    &lt;div class="d-flex align-items-center"&gt;
                        &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                            &lt;img src="../assets/images/faces/5.jpg" alt="img"&gt;
                        &lt;/span&gt;Samantha Julia
                    &lt;/div&gt;
                &lt;/th&gt;
                &lt;td&gt;&lt;span class="badge bg-success-transparent"&gt;Active&lt;/span&gt;&lt;/td&gt;
                &lt;td&gt;julianasams143@gmail.com&lt;/td&gt;
                &lt;td&gt;
                    &lt;div class="hstack gap-2 flex-wrap"&gt;
                        &lt;a href="javascript:void(0);" class="text-info fs-14 lh-1"&gt;&lt;i
                                class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                        &lt;a href="javascript:void(0);" class="text-danger fs-14 lh-1"&gt;&lt;i
                                class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                            </div>
                        </div>
                    </div>
@endsection


{{-- <td><span class="badge bg-light text-dark">{{ $category->isActive }}</span> --}}