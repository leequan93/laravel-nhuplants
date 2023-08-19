@extends('layouts.admin')

@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">Table Basic</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Client</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>
                                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                                        </td>
                                        <td>Albert Cook</td>
                                        <td>
                                            <span class="badge bg-label-primary me-1">Active</span>
                                        </td>
                                        <td>text</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Table Basic</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Client</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>
                                            <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                                        </td>
                                        <td>Albert Cook</td>
                                        <td>
                                            <span class="badge bg-label-primary me-1">Active</span>
                                        </td>
                                        <td>text</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
