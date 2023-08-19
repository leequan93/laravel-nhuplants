@extends('layouts.admin')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> Category
        </h4>
        <!-- /Breadcrumb -->

        @if (session('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <i class='bx bxs-check-square' ></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('admin.category.index') }}" method="GET">
                    <div class="row gx-3 gy-2 align-items-center">
                        <div class="col-md-3">
                            <label class="form-label">Title</label>
                            <div>
                                <input type="text" class="form-control" placeholder="Title" name="title" value="{{ $request->query('title') }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Status</label>
                            <select class="form-select color-dropdown" name="status">
                                <option value=""> -- Choose option --</option>
                                @foreach (config('constants.status') as $status)
                                    @switch($status)
                                        @case(config('constants.status.public'))
                                            <option value="{{ $status }}" {{ $request->query('status') == $status ? 'selected' : '' }}>Public</option>
                                            @break
                                        @case(config('constants.status.draft'))
                                            <option value="{{ $status }}" {{ $request->query('status') == $status ? 'selected' : '' }}>Draft</option>
                                            @break
                                    @endswitch
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">&nbsp;</label>
                            <div>
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class='bx bx-filter-alt'></i> Filter
                                </button>
                                <a type="button" class="btn btn-outline-warning" href="{{ route('admin.category.index') }}">
                                    <i class='bx bx-eraser'></i> Eraser
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header ms-auto">
                <a type="button" class="btn btn-outline-success" href="{{ route('admin.category.create') }}">
                    <i class='bx bx-plus'></i> Create
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td><img src="/{{ $category->image }}" class="img-thumbnail" width="90" height="100"></td>
                                    <td>
                                        @switch($category->status)
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
                                    </td>
                                    <td>
                                        <a class="dropdown-item" href="{{ route('admin.category.show', $category) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>

                                        @switch($category->status)
                                            @case(config('constants.status.public'))
                                                <form action="{{ route('admin.category.draft', $category) }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="dropdown-item">
                                                        <i class='bx bx-file' ></i> Draft
                                                    </button>
                                                </form>
                                                @break
                                            @case(config('constants.status.draft'))
                                                <form action="{{ route('admin.category.public', $category) }}" method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit" class="dropdown-item">
                                                        <i class='bx bx-check'></i> Public
                                                    </button>
                                                </form>
                                                @break
                                        @endswitch

                                        <form action="{{ route('admin.category.destroy', $category) }}" method="POST" onsubmit="return confirm('Want to destroy?');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item">
                                                <i class="bx bx-trash me-1"></i> Destroy
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row mt-3">
                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
