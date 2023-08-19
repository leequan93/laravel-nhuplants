@extends('layouts.admin')

@section('content-bk')
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.index') }}"><i class="fa fa-home"></i> Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin.product.index') }}">Product</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $product->id }}</li>
        </ul>
    </nav>

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="x_panel">
                <div class="x_title">
                    <div class="row">
                        <div class="col-md-10 col-sm-10">
                            <h2>Product</h2>
                        </div>
                        <div class="col-md-2 col-sm-2 text-right">
                            <a type="button" class="btn btn-success" href="{{ route('admin.product.index') }}">
                                <i class="fa fa-reply"></i> Go back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="x_content">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                    <form class="form-horizontal form-label-left" action="{{ route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <h4>
                                    ID: {{ $product->id }} |
                                    @switch($product->status)
                                        @case(config('constants.status.destroy'))
                                            <span class="badge badge-danger">Destroy</span>
                                            @break
                                        @case(config('constants.status.public'))
                                            <span class="badge badge-success">Public</span>
                                            @break
                                        @case(config('constants.status.draft'))
                                            <span class="badge badge-warning">Draft</span>
                                            @break
                                    @endswitch
                                </h4>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Category <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="category_id">
                                    <option> -- Choose option --</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $product->category->id == $category->id ? 'selected' : '' }}>
                                            {{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Title <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" name="title" value="{{ $product->title }}">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                                @error('price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <img src="/{{ $product->image }}" class="img-thumbnail" width="90" height="100"> 
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Image <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" class="form-control form-image" name="image">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <div class="row">
                                    @foreach ($product->product_image_extras as $product_image_extra)
                                        <div class="col-md-2 col-sm-2">
                                            <div class="thumbnail">
                                                <div class="image view view-first">
                                                    <img src="/{{ $product_image_extra->image }}" class="img-thumbnail" width="90" height="100">
                                                    <div class="mask">
                                                        <div class="tools tools-bottom">
                                                            <button type="button" class="btn btn-danger" onClick="productImageExtraDestroy({{ $product_image_extra->id }})">
                                                                Destroy
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Image extra</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" class="form-control form-image" name="image_extra[]" multiple>
                                @error('image_extra.*')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control" rows="5" name="description" id="description">{{ $product->description }}</textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        @if (in_array($product->status, [config('constants.status.public'), config('constants.status.draft')]))
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                    <div class="col-md-6 col-sm-6 text-right">
                                        @switch($product->status)
                                            @case(config('constants.status.draft'))
                                                <button type="button" class="btn btn-primary" onClick="public()">Public</button>
                                                @break
                                            @case(config('constants.status.public'))
                                                <button type="button" class="btn btn-warning" onClick="draft()">Draft</button>
                                                @break
                                        @endswitch
                                        <button type="button" class="btn btn-danger" onClick="destroy()">Destroy</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span>
            <span class="text-muted fw-light">Product /</span> {{ $product->id }}
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
                    <form action="{{ route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-md-12 col-lg-8 offset-lg-2 mt-3 mb-3">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <h6>
                                        @switch($product->status)
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
                                <label class="col-sm-2 col-form-label">
                                    Category <span class="required">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id">
                                        <option> -- Choose option --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $product->category->id == $category->id ? 'selected' : '' }}>
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Title <span class="required">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $product->title }}">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Price <span class="required">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Price" name="price" value="{{ $product->price }}">
                                    @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3 justify-content-end">
                                <div class="col-sm-10">
                                    <img src="/{{ $product->image }}" class="img-thumbnail" width="90" height="100">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">
                                    Image
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            @if (count($product->product_image_extras))
                                <div class="row mb-3 justify-content-end">
                                    <div class="col-sm-10">
                                        <div class="row">
                                            @foreach ($product->product_image_extras as $product_image_extra)
                                                <div class="col-md-4 col-lg-3 mb-3">
                                                    <div class="card">
                                                        <img class="card-img" src="/{{ $product_image_extra->image }}" width="100" height="100">
                                                        <div class="card-img-overlay card-img-overlay-btn">
                                                            <button type="button" class="btn btn-xs btn-icon btn-outline-danger" onClick="productImageExtraDestroy({{ $product_image_extra->id }})">
                                                                <i class='bx bx-x'></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
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
                                    <textarea class="form-control" rows="5" placeholder="Description" id="description" name="description">{{ $product->description }}</textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <a type="button" class="btn btn-outline-primary" href="{{ route('admin.product.index') }}">
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

@section('js')
    <script>
        CKEDITOR.replace( 'description' );

        function productImageExtraDestroy(id)
        {
            var result = confirm('Want to destroy?');
            if (!result) {
                return false;
            }

            $.ajax({
                type: 'DELETE',
                url: `/admin/product/image-extra/${id}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                error: function (res) {
                    alert(res.responseJSON.message);
                }
            });

            window.location.href = `{{ route('admin.product.show', $product) }}`;
        }
    </script>
@endsection
