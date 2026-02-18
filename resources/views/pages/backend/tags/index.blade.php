@extends('layouts.backend.main')

@section('title', 'Tags')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 align-self-center mb-4">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tags</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Tags</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            {{-- Left side: Create Form --}}
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-white py-3 border-0">
                        <h5 class="card-title mb-0 fw-bold">Add New Tag</h5>
                    </div>
                    <div class="card-body">
                        @include('pages.backend.tags.create')
                    </div>
                </div>
            </div>

            {{-- Right side: Table --}}
            <div class="col-lg-8">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-white py-3 border-0">
                        <h5 class="card-title mb-0 fw-bold">All Tags</h5>
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle w-100" id="tags-table">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-0">Name</th>
                                        <th class="border-0">Slug</th>
                                        <th class="border-0">Description</th>
                                        <th class="border-0 text-end">Actions</th>
                                    </tr>
                                </thead>
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
            $('#tags-table').DataTable({
                processing: true,
                ajax: {
                    url: "{{ route('tags.index') }}",
                },
                columns: [
                    { 
                        data: 'name',
                        render: function(data, type, row) {
                            return `<span class="fw-bold text-dark">${data}</span>`;
                        }
                    },
                    { 
                        data: 'slug',
                        render: function(data, type, row) {
                            return `<code class="text-primary small">${data}</code>`;
                        }
                    },
                    { 
                        data: 'description',
                        render: function(data, type, row) {
                            if (!data) return '<span class="text-muted small">No description</span>';
                            return `<small class="text-muted">${data.length > 50 ? data.substring(0, 50) + '...' : data}</small>`;
                        }
                    },
                    {
                        data: 'id',
                        className: 'text-end',
                        render: function(data, type, row) {
                            return `
                                <div class="btn-group">
                                    <a href="/tags/${data}/edit" class="btn btn-sm btn-light text-warning me-1" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="/tags/${data}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-light text-danger" 
                                                onclick="return confirm('Are you sure you want to delete this tag?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            `;
                        }
                    }
                ],
                language: {
                    searchPlaceholder: "Search tags...",
                    search: "",
                    lengthMenu: "_MENU_ per page",
                },
                order: [[0, 'asc']]
            });
        });
    </script>
@endpush
