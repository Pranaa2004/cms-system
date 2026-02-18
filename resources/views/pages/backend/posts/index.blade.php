@extends('layouts.backend.main')

@php
    use Carbon\Carbon;
@endphp

@section('title', 'Posts')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 align-self-center d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Posts</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-path"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Posts</li>
                        </ol>
                    </nav>
                </div>
                <a href="{{ route('posts.create') }}" class="btn btn-primary shadow-sm px-4">
                    <i class="icon-plus me-1"></i> Add New Post
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
                                <th>Categories</th>
                                <th>Tags</th>
                                <th class="text-center">Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>
                                        <div class="fw-bold text-dark">{{ $post->title }}</div>
                                        <div class="mt-1">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="text-warning small me-2">
                                                <i class="far fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 text-danger small" 
                                                        onclick="return confirm('Are you sure you want to delete this post?')">
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
                                            <span class="small">{{ $post->user->name ?? 'Unknown' }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        @forelse ($post->categories as $category)
                                            <span class="badge bg-light text-primary border border-primary small mb-1">{{ $category->name }}</span>
                                        @empty
                                            <span class="text-muted small">None</span>
                                        @endforelse
                                    </td>
                                    <td>
                                        @forelse ($post->tags as $tag)
                                            <span class="badge bg-light text-secondary border border-secondary small mb-1">{{ $tag->name }}</span>
                                        @empty
                                            <span class="text-muted small">None</span>
                                        @endforelse
                                    </td>
                                    <td class="text-center">
                                        @php
                                            $statusBadge = match ($post->status) {
                                                'published' => 'bg-success',
                                                'scheduled' => 'bg-info',
                                                'draft' => 'bg-warning',
                                                'achived' => 'bg-secondary',
                                                default => 'bg-dark',
                                            };
                                        @endphp
                                        <span class="badge {{ $statusBadge }} rounded-pill">
                                            {{ ucfirst($post->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="small">
                                            <div class="text-dark">{{ Carbon::parse($post->published_at)->format('M d, Y') }}</div>
                                            <div class="text-muted">{{ Carbon::parse($post->published_at)->diffForHumans() }}</div>
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
                        searchPlaceholder: "Search posts...",
                        search: ""
                    }
                });
            }
        });
    </script>
@endpush
