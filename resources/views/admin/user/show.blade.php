@extends('layouts.admin')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> 
            Profile
        </h4>
        <!-- /Breadcrumb -->

        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <i class='bx bxs-check-square' ></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <i class='bx bx-error' ></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="{{ route('admin.user.update') }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="col-md-12 col-lg-8 offset-lg-2 mt-3 mb-3">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">
                                    Email
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly="readonly">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">
                                    Name <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">
                                    Old password <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="old_password">
                                    @error('old_password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">
                                    New password <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">
                                    Confirm new password <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <a type="button" class="btn btn-outline-primary" href="{{ route('admin.category.index') }}">
                                        <i class='bx bx-arrow-back'></i> Back
                                    </a>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection