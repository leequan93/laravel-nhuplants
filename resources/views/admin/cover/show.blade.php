@extends('layouts.admin')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span>
            <span class="text-muted fw-light">Cover /</span>
            {{ $cover->id }}
        </h4>
        <!-- /Breadcrumb -->

        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <i class='bx bxs-check-square' ></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="{{ route('admin.cover.update', $cover) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-12 col-lg-8 offset-lg-2 mt-3 mb-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <h6>
                                        @switch($cover->status)
                                            @case(config('constants.status.destroy'))
                                                <span class="badge bg-label-danger">Destroy</span>
                                                @break
                                            @case(config('constants.status.public'))
                                                <span class="badge bg-label-success">Public</span>
                                                @break
                                            @case(config('constants.status.draft'))
                                                <span class="badge bg-label-warning">Draft</span>
                                                @break
                                        @endswitch
                                    </h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img src="/{{ $cover->image }}" class="img-thumbnail" width="90" height="100">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Image <span class="required">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <a type="button" class="btn btn-outline-primary" href="{{ route('admin.cover.index') }}">
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
