@extends('layouts.backend.main')

@section('title', 'Pages')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 align-self-center d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Pages</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Pages</li>
                        </ol>
                    </nav>
                </div>
                <a href="{{ route('pages.create') }}" class="btn btn-primary shadow-sm px-4 rounded-3">
                    <i class="bi bi-plus-lg me-1"></i> Add New Page
                </a>
            </div>
        </div>

        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle w-100" id="pages-table">
                        <thead class="table-light">
                            <tr>
                                <th class="border-0">Title</th>
                                <th class="border-0">Author</th>
                                <th class="border-0 text-center">Status</th>
                                <th class="border-0">Date</th>
                                <th class="border-0 text-end">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#pages-table').DataTable({
                processing: true,
                ajax: {
                    url: "{{ route('pages.index') }}",
                },
                columns: [
                    { 
                        data: 'title',
                        render: function(data, type, row) {
                            return `<div class="fw-bold text-dark">${data}</div>
                                    <small class="text-muted">/${row.slug}</small>`;
                        }
                    },
                    { 
                        data: 'user.name',
                        defaultContent: '<span class="text-muted">Unknown</span>',
                        render: function(data, type, row) {
                            return `<div class="d-flex align-items-center">
                                        <div class="bg-light rounded-circle p-2 me-2 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">
                                            <i class="bi bi-person text-muted small"></i>
                                        </div>
                                        <span class="small">${data}</span>
                                    </div>`;
                        }
                    },
                    { 
                        data: 'status',
                        className: 'text-center',
                        render: function(data, type, row) {
                            let badgeClass = 'bg-dark';
                            if (data === 'published') badgeClass = 'bg-success';
                            else if (data === 'scheduled') badgeClass = 'bg-info';
                            else if (data === 'draft') badgeClass = 'bg-warning';
                            else if (data === 'achived') badgeClass = 'bg-secondary';
                            
                            return `<span class="badge ${badgeClass} rounded-pill px-3">${data.charAt(0).toUpperCase() + data.slice(1)}</span>`;
                        }
                    },
                    { 
                        data: 'published_at',
                        render: function(data, type, row) {
                            if (!data) return '<span class="text-muted small">Not set</span>';
                            let date = new Date(data);
                            return `<div class="small">
                                        <div class="text-dark">${date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' })}</div>
                                        <div class="text-muted small">${date.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' })}</div>
                                    </div>`;
                        }
                    },
                    {
                        data: 'id',
                        className: 'text-end',
                        render: function(data, type, row) {
                            return `
                                <div class="btn-group">
                                    <a href="/pages/${data}/edit" class="btn btn-sm btn-light text-warning me-1" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="/pages/${data}" method="POST" class="d-inline-block delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-light text-danger" 
                                                onclick="return confirm('Are you sure you want to delete this page?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            `;
                        }
                    }
                ],
                language: {
                    searchPlaceholder: "Search pages...",
                    search: "",
                    lengthMenu: "_MENU_ per page",
                    info: "Showing _START_ to _END_ of _TOTAL_ pages",
                    paginate: {
                        next: '<i class="bi bi-chevron-right"></i>',
                        previous: '<i class="bi bi-chevron-left"></i>'
                    }
                },
                order: [[3, 'desc']]
            });
        });
    </script>
@endpush
