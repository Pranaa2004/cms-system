@extends('layouts.backend.main')

@section('title', 'Tags')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 align-self-center mb-4">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tags</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-path"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Tags</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            {{-- Left side: Create Form --}}
            <div class="col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="card-title mb-0">Add New Tag</h5>
                    </div>
                    <div class="card-body">
                        @include('pages.backend.tags.create')
                    </div>
                </div>
            </div>

            {{-- Right side: Table --}}
            <div class="col-lg-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">All Tags</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle" id="datatable">
                                <thead class="table-light">
                                    <tr>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{ $tag->name }}</span>
                                            </td>
                                            <td>
                                                <code class="text-primary small">{{ $tag->slug }}</code>
                                            </td>
                                            <td>
                                                <small class="text-muted">{{ Str::limit($tag->description, 50) }}</small>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('tags.edit', $tag->id) }}"
                                                       class="btn btn-sm btn-outline-warning" title="Edit">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('tags.destroy', $tag->id) }}"
                                                          method="POST" class="d-inline ms-1">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                                                onclick="return confirm('Are you sure you want to delete this tag?')" title="Delete">
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
                        searchPlaceholder: "Search tags...",
                        search: ""
                    }
                });
            }
        });
    </script>
@endpush
