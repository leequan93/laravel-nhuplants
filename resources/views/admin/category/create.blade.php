@extends('layouts.admin')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span>
            <span class="text-muted fw-light">Category /</span> Create
        </h4>
        <!-- /Breadcrumb -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 col-lg-8 offset-lg-2 mt-3 mb-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Title <span class="required">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Title" name="title">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <a type="button" class="btn btn-outline-primary" href="{{ route('admin.category.index') }}">
                                        <i class='bx bx-arrow-back'></i> Back
                                    </a>
                                    <button type="submit" class="btn btn-success">Create</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
