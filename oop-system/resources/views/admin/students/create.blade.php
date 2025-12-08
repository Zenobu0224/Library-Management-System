@extends('admin.layouts.master')

@section('title')
    Add New Student | Library Management
@endsection

@section('contents')
<!-- Start:: row-1 -->
<div class="row">
    <div class="col-xl-10 mx-auto mt-4">
    <div class="card custom-card">
        <div class="card-header justify-content-between">
            <div class="card-title">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user ml-2 side-menu__icon">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
                Add Student
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('students.store') }}">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="student_id">
                    <label for="floatingPassword">Student ID</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="last_name">
                    <label for="floatingPassword">Lastname</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="first_name">
                    <label for="floatingPassword">Firstname</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="middle_name">
                    <label for="floatingPassword">Middlename</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="email">
                    <label for="floatingPassword">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="course">
                    <label for="floatingPassword">Course</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="year_level">
                    <label for="floatingPassword">Year Level</label>
                </div>

                <div class="col-12 mt-5 text-center">
                    <button type="submit" class="btn btn-primary btn-sm px-4 py-2">Add Book</button>
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