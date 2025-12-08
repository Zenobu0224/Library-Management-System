@extends('admin.layouts.master')

@section('title')
    Edit User | Library Management
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
                Edit User
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('student_id') is-invalid @enderror" 
                        id="student_id" placeholder="Student ID" name="student_id" 
                        value="{{ old('student_id', $user->student_id) }}">
                    <label for="student_id">Student ID</label>
                    @error('student_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                        id="last_name" placeholder="Lastname" name="last_name"  
                        value="{{ old('last_name', $user->lastname) }}">
                    <label for="last_name">Lastname</label>
                    @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('first_name') is-invalid @enderror" 
                        id="first_name" placeholder="Firstname" name="first_name"  
                        value="{{ old('first_name', $user->firstname) }}">
                    <label for="first_name">Firstname</label>
                    @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('middle_name') is-invalid @enderror" 
                        id="middle_name" placeholder="Middlename" name="middle_name" 
                        value="{{ old('middle_name', $user->middlename) }}">
                    <label for="middle_name">Middlename</label>
                    @error('middle_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                        id="email" placeholder="Email" name="email" 
                        value="{{ old('email', $user->email) }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('course') is-invalid @enderror" 
                        id="course" placeholder="Course" name="course" 
                        value="{{ old('course', $user->course) }}">
                    <label for="course">Course</label>
                    @error('course')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('year_level') is-invalid @enderror" 
                        id="year_level" placeholder="Year Level" name="year_level" 
                        value="{{ old('year_level', $user->year_level) }}">
                    <label for="year_level">Year Level</label>
                    @error('year_level')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 mt-5 text-center">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm px-4 py-2 me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-sm px-4 py-2">Update User</button>
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