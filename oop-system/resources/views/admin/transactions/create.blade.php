@extends('admin.layouts.master')

@section('title')
Add Transaction | Library Management
@endsection

@section('contents')
<!-- Start:: row-1 -->
<div class="row">
    <div class="col-xl-10 mx-auto mt-4">
    <div class="card custom-card">
        <div class="card-header justify-content-between">
            <div class="card-title">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-library-icon lucide-library ml-2 side-menu__icon">
                    <path d="m16 6 4 14"/>
                    <path d="M12 6v14"/>
                    <path d="M8 8v12"/>
                    <path d="M4 4v16"/>
                </svg>
                Transactions Description
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('transactions.store') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="txn_no">
                    <label for="floatingInput">Transaction #</label>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                    <select class="form-control py-3" name="student_id" aria-placeholder="Category">
                        <option value="">Select Student</option>
                        @foreach($students as $student)
                            <option value="{{ $student->student_id }}">
                                {{ $student->student_id }} - {{ $student->last_name }}, {{ $student->first_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                    <select class="form-control py-3" name="book_id" aria-placeholder="Category">
                        <option value="">Select Book</option>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">{{ $book->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                    <label for="input-date" class="form-label">Date Borrowed</label>
                    <input type="date" class="form-control py-3" name="date_borrowed">
                </div>  

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-3">
                    <label for="input-date" class="form-label">Due Date</label>
                    <input type="date" class="form-control py-3" name="due_date">
                </div>  

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="by">
                    <label for="floatingPassword">Processed By</label>
                </div>

                <div class="col-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary btn-sm px-4 py-2">Add Transaction</button>
                </div>
            </form>

        </div>
        <div class="card-footer d-none border-top-0">
    
            <!-- Prism Code -->
    <pre class="language-html">
        <code class="language-html">&lt;div class="form-floating mb-3"&gt;
        &lt;input type="email" class="form-control" id="floatingInput"
        placeholder="name@example.com"&gt;
        &lt;label for="floatingInput"&gt;Email address&lt;/label&gt;
        &lt;/div&gt;
        &lt;div class="form-floating"&gt;
        &lt;input type="password" class="form-control" id="floatingPassword"
        placeholder="Password"&gt;
        &lt;label for="floatingPassword"&gt;Password&lt;/label&gt;
        &lt;/div&gt;
        </code>
    </pre>
    <!-- Prism Code -->

        </div>
    </div>
</div>
</div>
<!-- End:: row-1 -->
@endsection