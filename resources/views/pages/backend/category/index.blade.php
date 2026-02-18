@extends('layouts.backend.main')

@section('title', 'Categories')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 align-self-center mb-4">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Categories</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-path"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Categories</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            {{-- Left side: Create Form --}}
            <div class="col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="card-title mb-0">Add New Category</h5>
                    </div>
                    <div class="card-body">
                        @include('pages.backend.category.create')
                    </div>
                </div>
            </div>

            {{-- Right side: Table --}}
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">All Categories</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle" id="datatable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Slug</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{ $category->name }}</span>
                                            </td>
                                            <td>
                                                <small class="text-muted">{{ Str::limit($category->description, 50) }}</small>
                                            </td>
                                            <td>
                                                <code class="text-primary small">{{ $category->slug }}</code>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                       class="btn btn-sm btn-outline-warning" title="Edit">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('category.destroy', $category->id) }}"
                                                          method="POST" class="d-inline ms-1">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                                                onclick="return confirm('Are you sure you want to delete this category?')" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
            if (!$.fn.DataTable.isDataTable('#datatable')) {
                $('#datatable').DataTable({
                    paging: true,
                    searching: true,
                    ordering: true,
                    info: true,
                    language: {
                        searchPlaceholder: "Search categories...",
                        search: ""
                    }
                });
            }
        });
    </script>
@endpush
