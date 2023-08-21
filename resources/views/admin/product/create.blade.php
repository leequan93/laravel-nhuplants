@extends('layouts.admin')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span>
            <span class="text-muted fw-light">Product /</span> Create
        </h4>
        <!-- /Breadcrumb -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 col-lg-8 offset-lg-2 mt-3 mb-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Category <span class="required">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id">
                                        <option value=""> -- Choose option --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
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
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Label
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Label" name="label">
                                    @error('label')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Price <span class="required">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Price" name="price">
                                    @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Price old
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Price old" name="price_old">
                                    @error('price_old')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
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
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Image extra
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control form-image" name="image_extra[]" multiple>
                                    @error('image_extra.*')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Description
                                </label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" placeholder="Description" id="description" name="description"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <a type="button" class="btn btn-outline-primary" href="{{ route('admin.product.index') }}">
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

@section('js')
    <script>
        CKEDITOR.replace( 'description' );
    </script>
@endsection
