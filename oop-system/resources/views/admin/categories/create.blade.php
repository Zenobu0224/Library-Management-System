@extends('admin.layouts.master')

@section('title')
Add Category | Library Management System
@endsection

@section('contents')
<!-- Start:: row-2 -->
<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card mt-3">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-column-stacked-icon lucide-chart-column-stacked ml-2 side-menu__icon">
                        <path d="M11 13H7"/>
                        <path d="M19 9h-4"/>
                        <path d="M3 3v16a2 2 0 0 0 2 2h16"/>
                        <rect x="15" y="5" width="4" height="12" rx="1"/>
                        <rect x="7" y="8" width="4" height="9" rx="1"/>
                    </svg>
                    Add New Category
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('categories.store') }}">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-5">
                            <label for="input-label" class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-5">
                            <label for="input-label" class="form-label">Status</label >

                            <select class="form-control" name="isActive">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mt-5">
                            <label for="input-date" class="form-label">Type Date</label>
                            <input type="date" class="form-control" name="date_added">
                        </div>  

                        <div class="col-12 mt-5 text-start">
                            <button type="submit" class="btn btn-primary btn-sm px-5 py-2">Add Category</button>
                        </div>
                    </div>
            </div>
        <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="row gy-4"&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;p class="mb-2 text-muted"&gt;Basic Input:&lt;/p&gt;
        &lt;input type="text" class="form-control" id="input"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-label" class="form-label"&gt;Form Input With Label&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-label"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-placeholder" class="form-label"&gt;Form Input With Placeholder&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-placeholder" placeholder="Placeholder"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-text" class="form-label"&gt;Type Text&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-text" placeholder="Text"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-number" class="form-label"&gt;Type Number&lt;/label&gt;
        &lt;input type="number" class="form-control" id="input-number" placeholder="Number"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-password" class="form-label"&gt;Type Password&lt;/label&gt;
        &lt;input type="password" class="form-control" id="input-password" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-email" class="form-label"&gt;Type Email&lt;/label&gt;
        &lt;input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-tel" class="form-label"&gt;Type Tel&lt;/label&gt;
        &lt;input type="tel" class="form-control" id="input-tel" placeholder="+1100-2031-1233"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-submit" class="form-label"&gt;Type Submit&lt;/label&gt;
        &lt;input type="submit" class="form-control" id="input-submit" value="Submit"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-reset" class="form-label"&gt;Type Reset&lt;/label&gt;
        &lt;input type="reset" class="form-control" id="input-reset"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-button" class="form-label"&gt;Type Button&lt;/label&gt;
        &lt;input type="button" class="form-control btn btn-primary" id="input-button"  value="Button"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-xl-4"&gt;
                &lt;label class="form-label"&gt;Type Color&lt;/label&gt;
                &lt;input class="form-control form-input-color" type="color" value="#136bd0"&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-4"&gt;
                &lt;div class="form-check"&gt;
                    &lt;p class="mb-3 px-0 text-muted"&gt;Type Checkbox&lt;/p&gt;
                    &lt;input class="form-check-input ms-2" type="checkbox" value="" checked=""&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-3"&gt;
                &lt;div class="form-check"&gt;
                    &lt;p class="mb-3 px-0 text-muted"&gt;Type Radio&lt;/p&gt;
                    &lt;input class="form-check-input ms-2" type="radio" checked=""&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-file" class="form-label"&gt;Type File&lt;/label&gt;
        &lt;input class="form-control" type="file" id="input-file"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label class="form-label"&gt;Type Url&lt;/label&gt;
        &lt;input class="form-control" type="url"  name="website" placeholder="http://example.com"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-disabled" class="form-label"&gt;Type Disabled&lt;/label&gt;
        &lt;input type="text" id="input-disabled" class="form-control" placeholder="Disabled input" disabled=""&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-readonlytext" class="form-label"&gt;Input Readonly Text&lt;/label&gt;
        &lt;input type="text" readonly="" class="form-control-plaintext" id="input-readonlytext" value="email@example.com"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="disabled-readonlytext" class="form-label"&gt;Disabled Readonly Input&lt;/label&gt;
        &lt;input class="form-control" type="text" value="Disabled readonly input" id="disabled-readonlytext" aria-label="Disabled input example" disabled="" readonly=""&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label class="form-label"&gt;Type Readonly Input&lt;/label&gt;
        &lt;input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly=""&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="text-area" class="form-label"&gt;Textarea&lt;/label&gt;
        &lt;textarea class="form-control" id="text-area" rows="1"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-DataList" class="form-label"&gt;Datalist example&lt;/label&gt;
        &lt;input class="form-control" list="datalistOptions" id="input-DataList" placeholder="Type to search..."&gt;
        &lt;datalist id="datalistOptions"&gt;
            &lt;option value="San Francisco"&gt;
            &lt;/option&gt;
            &lt;option value="New York"&gt;
            &lt;/option&gt;
            &lt;option value="Seattle"&gt;
            &lt;/option&gt;
            &lt;option value="Los Angeles"&gt;
            &lt;/option&gt;
            &lt;option value="Chicago"&gt;
            &lt;/option&gt;
        &lt;/datalist&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-date" class="form-label"&gt;Type Date&lt;/label&gt;
        &lt;input type="date" class="form-control" id="input-date"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-week" class="form-label"&gt;Type Week&lt;/label&gt;
        &lt;input type="week" class="form-control" id="input-week"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-month" class="form-label"&gt;Type Month&lt;/label&gt;
        &lt;input type="month" class="form-control" id="input-month"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-time" class="form-label"&gt;Type Time&lt;/label&gt;
        &lt;input type="time" class="form-control" id="input-time"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-datetime-local" class="form-label"&gt;Type datetime-local&lt;/label&gt;
        &lt;input type="datetime-local" class="form-control" id="input-datetime-local"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-search" class="form-label"&gt;Type Search&lt;/label&gt;
        &lt;input type="search" class="form-control" id="input-search" placeholder="Search"&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->
@endsection