@extends('admin.layouts.master')

@section('title')
Transactions | Library Management
@endsection

@section('contents')
<!-- Start:: row-10 -->
                <div class="row">
                    <div class="col-xl-11 mt-5 mx-auto">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user ml-2 side-menu__icon">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                        <circle cx="12" cy="7" r="4"/>
                                    </svg>
                                    Transactions
                                </div>
                                <div class="prism-toggle">
                                    <a class="btn btn-sm btn-primary-light" href="{{route('transactions.create')}}">Add New Transaction</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Transaction #</th>
                                                <th scope="col">StudentID</th>
                                                <th scope="col">Book ID</th>
                                                <th scope="col">Date Borrowed</th>
                                                <th scope="col">By</th>
                                                <th scope="col">Date Added</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($transactions as $transaction)
                                                <tr class="table-primary">
                                                    <th scope="row">{{$transaction->txn_no}}</th>
                                                    <td>{{$transaction->student_id}}</td>
                                                    <td>{{$transaction->book_id}}</td>
                                                    <td>{{$transaction->date_borrowed}}</td>
                                                    <td>{{$transaction->by}}</td>
                                                    <td>{{$transaction->date_added}}</td>
                                                    <td>{{$transaction->due_date}}</td>
                                                    <td>
                                                        <a class="btn btn-sm btn-success btn-wave" href="">
                                                            <i class="ri-pencil-line align-middle me-2 d-inline-block"></i>Edit
                                                        </a>

                                                        <form action="" method="POST" style="display:inline-block;">
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