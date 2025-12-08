@extends('admin.layouts.master')

@section('title')
    Students | Library Management
@endsection

@section('contents')
<!-- Start:: row-10 -->
                <div class="row">
                    <div class="col-xl-11 mt-3">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user ml-2 side-menu__icon">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                        <circle cx="12" cy="7" r="4"/>
                                    </svg>
                                    Student
                                </div>
                                <div class="prism-toggle">
                                    <a class="btn btn-sm btn-primary-light" href="{{route('students.create')}}">Add New Student</a>
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
                                            @foreach($students as $student)
                                                <tr class="table-primary">
                                                    <th scope="row">{{$student->student_id}}</th>
                                                    <td>{{$student->last_name}}</td>
                                                    <td>{{$student->first_name}}</td>
                                                    <td>{{$student->middle_name}}</td>
                                                    <td>{{$student->email}}</td>
                                                    <td><span class="badge bg-primary">{{$student->course}}</span></td>
                                                    <td>{{$student->year_level}}</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-success btn-wave" href="">
                                                            <i class="ri-pencil-line align-middle me-2 d-inline-block"></i>Edit
                                                        </a>
                                                        <button class="btn btn-sm btn-danger btn-wave">
                                                            <i class="ri-delete-bin-line align-middle me-2 d-inline-block"></i>Delete
                                                        </button>
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