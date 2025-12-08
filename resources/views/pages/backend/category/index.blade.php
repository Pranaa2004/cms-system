{{-- @extends('layouts.backend.main')

@section('title', 'Category')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Category</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-self-center">
            <div class="col-5">
                @include('pages.backend.category.create')
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <a href="{{ route('category.edit', $category->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this page?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection --}}


@extends('layouts.backend.main')

@section('title', 'Category')

@section('content')
    <div class="container-fluid py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-1">Categories</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                {{-- Left side: Create Form --}}
                <div class="col-lg-4 col-md-5 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Add New Category</h5>
                        </div>
                        <div class="card-body">
                            @include('pages.backend.category.create')
                        </div>
                    </div>
                </div>

                {{-- Right side: Table --}}
                <div class="col-lg-8 col-md-7">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Category List</h5>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0" id="datatable">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Slug</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td class="fw-semibold">
                                                    {{ $category->name }}
                                                    <div class="mt-1 small text-muted">
                                                        <a href="{{ route('category.edit', $category->id) }}"
                                                            class="me-3 text-warning" onclick="return confirm('Are you sure you want to edit this post?')">
                                                            <i class="far fa-edit me-1"></i><span class="small text">Edit</span>
                                                        </a>
                                                        <form action="{{ route('category.destroy', $category->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-link p-0 text-danger"
                                                                onclick="return confirm('Are you sure you want to delete this post?')">
                                                                <i class="fas fa-trash me-1"></i><span class="small text">Delete</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td>{{ $category->description }}</td>
                                                <td><span class="badge bg-secondary">{{ $category->slug }}</span></td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <tfoot class="table-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Slug</th>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                info: true
            });
        });
    </script>
@endpush
