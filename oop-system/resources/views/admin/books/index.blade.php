@extends('admin.layouts.master')

@section('title')
    Assets | Library Management System
@endsection

@section('contents')

<div class="col-xl-12 mt-3">
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
                <a class="btn btn-sm btn-primary-light" href="{{ route('books.create') }}">Add Book</a>
            </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table text-nowrap table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Author</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date Added</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">
                                    {{ $book->name }}
                                </div>
                            </th>
                            <td><span class="badge bg-success-transparent">{{ $book->isbn }}</span></td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->isActive ? 'Active' : 'Inactive' }}</td>
                            <td>{{ $book->date_added }}</td>
                            <td>
                                <a class="btn btn-sm btn-success btn-wave" href="{{ route('books.edit', $book->id) }}">
                                    <i class="ri-pencil-line align-middle me-2 d-inline-block"></i>Edit
                                </a>

                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
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