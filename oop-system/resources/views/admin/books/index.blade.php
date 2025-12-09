@extends('admin.layouts.master')

@section('title')
    Books | Library Management System
@endsection

@section('contents')
<!-- Start:: row-10 -->
                <div class="row">
                    <div class="col-xl-11 mt-5 mx-auto">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-library-icon lucide-library ml-2 side-menu__icon">
                                    <path d="m16 6 4 14"/>
                                    <path d="M12 6v14"/>
                                    <path d="M8 8v12"/>
                                    <path d="M4 4v16"/>
                                </svg>
                                    Books
                                </div>
                                <div class="prism-toggle">
                                    <a class="btn btn-sm btn-primary-light" href="{{route('books.create')}}">Add Book</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Book Title</th>
                                                <th scope="col">ISBN</th>
                                                <th scope="col">Author</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date Added</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($books as $book)
                                                <tr class="table-primary">
                                                    <th scope="row">{{$book->name}}</th>
                                                    <td>{{$book->isbn}}</td>
                                                    <td>{{$book->author}}</td>
                                                    <td>{{$book->isActive ? 'Active' : 'Inactive'}}</td>
                                                    <td>{{$book->date_added}}</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-success btn-wave" href="{{route('books.edit', $book->id)}}">
                                                            <i class="ri-pencil-line align-middle me-2 d-inline-block"></i>Edit
                                                        </a>

                                                        <form action="{{route('books.destroy', $book->id)}}" method="POST" style="display:inline-block;">
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