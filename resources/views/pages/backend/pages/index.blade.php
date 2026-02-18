@extends('layouts.backend.main')

@php
    use Carbon\Carbon;
@endphp

@section('title', 'Pages')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 align-self-center d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Pages</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-path"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Pages</li>
                        </ol>
                    </nav>
                </div>
                <a href="{{ route('pages.create') }}" class="btn btn-primary shadow-sm px-4">
                    <i class="icon-plus me-1"></i> Add New Page
                </a>
            </div>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th class="text-center">Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr>
                                    <td>
                                        <div class="fw-bold text-dark">{{ $page->title }}</div>
                                        <div class="mt-1">
                                            <a href="{{ route('pages.edit', $page->id) }}" class="text-warning small me-2">
                                                <i class="far fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 text-danger small" 
                                                        onclick="return confirm('Are you sure you want to delete this page?')">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-light rounded-circle p-2 me-2">
                                                <i class="fas fa-user text-muted"></i>
                                            </div>
                                            <span class="small">{{ $page->user->name ?? 'Unknown' }}</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        @php
                                            $statusBadge = match ($page->status) {
                                                'published' => 'bg-success',
                                                'scheduled' => 'bg-info',
                                                'draft' => 'bg-warning',
                                                'achived' => 'bg-secondary',
                                                default => 'bg-dark',
                                            };
                                        @endphp
                                        <span class="badge {{ $statusBadge }} rounded-pill">
                                            {{ ucfirst($page->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="small">
                                            <div class="text-dark">{{ Carbon::parse($page->published_at)->format('M d, Y') }}</div>
                                            <div class="text-muted">{{ Carbon::parse($page->published_at)->diffForHumans() }}</div>
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
                        searchPlaceholder: "Search pages...",
                        search: ""
                    }
                });
            }
        });
    </script>
@endpush
