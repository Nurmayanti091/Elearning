
@extends('admin.main')

@section('content')
    <div class="pagetitle">
        <h1>Edit Courses</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card" value="{{$courses->id ?? ''}}">
            <div class="card-body py-4">
                <form action="/admin/courses/update{{$courses->id}}" method="post" class="mt-3">
                    @csrf
                    @method('PUT')
                    <div class="mb-2">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$courses->name ?? ''}}">
                    </div>

                    <div class="mb-2">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" name="category" id="category" class="form-control" value="{{$courses->category ?? ''}}">
                    </div>

                    <div class="mb-2">
                        <label for="description" class="form-label">Desc</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{$courses->description ?? ''}}">
                    </div>
                    <div class="md-4">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
    </div>
    </section>
@endsection
