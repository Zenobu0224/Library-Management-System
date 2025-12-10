@extends('admin.layouts.master')

@section('title')
Transactions | Library Management
@endsection

@section('contents')
<!-- Start:: row-10 -->
                <div class="row">
                    <div class="col-xl-12 mt-3 mx-auto">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gpu-icon lucide-gpu mlr-2 side-menu__icon">
                                        <path d="M2 21V3"/>
                                        <path d="M2 5h18a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2.26"/>
                                        <path d="M7 17v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3"/>
                                        <circle cx="16" cy="11" r="2"/>
                                        <circle cx="8" cy="11" r="2"/>
                                    </svg>
                                    Transactions
                                </div>
                                <div class="prism-toggle">
                                    <a class="btn btn-sm btn-primary-light" href="{{route('transactions.create')}}">Add Transaction</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Transaction #</th>
                                                <th scope="col">StudentID</th>
                                                <th scope="col">Book</th>
                                                <th scope="col">Date Borrowed</th>
                                                <th scope="col">By</th>
                                                <th scope="col">Date Added</th>
                                                <th scope="col">Due Date</th>
                                                <th scope="col">Date Returned</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($transactions as $transaction)
                                                <tr class="{{ in_array($transaction->id, $overdueIds) ? 'table-danger' : 'table-primary' }}">
                                                    <th scope="row">{{$transaction->txn_no}}</th>
                                                    <td>{{$transaction->student_id}}</td>
                                                    <td>{{$transaction->book->name ?? 'N/A'}}</td>
                                                    <td>{{$transaction->date_borrowed}}</td>
                                                    <td>{{$transaction->by}}</td>
                                                    <td>{{$transaction->date_added}}</td>
                                                    <td>
                                                        {{$transaction->due_date}}
                                                        @if(in_array($transaction->id, $overdueIds))
                                                            <span class="badge bg-danger ms-2">OVERDUE</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($transaction->date_returned)
                                                            {{ $transaction->date_returned->format('Y-m-d') }}
                                                        @else
                                                            <span class="badge bg-warning text-dark">Not yet returned</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!$transaction->date_returned)
                                                            <form action="{{route('transactions.return', $transaction->id)}}" method="POST" style="display:inline-block;">
                                                                @csrf
                                                                @method('PATCH')
                                                                <button type="submit" class="btn btn-sm btn-info btn-wave">
                                                                    <i class="ri-check-line align-middle me-2 d-inline-block"></i>Return
                                                                </button>
                                                            </form>
                                                        @endif

                                                        <a class="btn btn-sm btn-success btn-wave" href="{{route('transactions.edit', $transaction->id)}}">
                                                            <i class="ri-pencil-line align-middle me-2 d-inline-block"></i>Edit
                                                        </a>

                                                        <form action="{{route('transactions.destroy', $transaction->id)}}" method="POST" style="display:inline-block;">
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