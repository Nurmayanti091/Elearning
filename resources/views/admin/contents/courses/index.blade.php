@extends('admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Course</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body py-4">
                <a href="/admin/courses/create" class="btn btn-primary mt-4">+Courses</a>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Category</th>
                            <th>Desc</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->category }}</td>
                                <td>{{ $course->desc }}</td>
                                <td class="d-flex">
                                    <a href="/admin/courses/edit" class="btn btn-primary">Edit</a>
                                    <a href="/admin/courses/" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
