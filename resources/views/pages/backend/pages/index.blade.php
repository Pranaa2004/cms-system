{{-- @extends('layouts.backend.main')

@section('tite', 'Pages')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Pages</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Pages</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-end">
                    <a href="{{ route('pages.create') }}" class="btn btn-primary">Create New Page</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $page)
                                        <tr>
                                            <td>{{ $page->title }}</td>
                                            <td>{{ Str::limit($page->body, 50) }}</td>
                                            <td>
                                                @if ($page->featured_media_id != null)
                                                    <img src="{{ asset('storage/' . $page->media->path) }}"
                                                        alt="{{ $page->title }}" width="100">
                                                @else
                                                    N/A
                                                @endif

                                            </td>
                                            <td>
                                                <a href="{{ route('pages.edit', $page->id) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('pages.destroy', $page->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this page?')">Delete</button>
                                                </form>
                                                <a href="" class="btn btn-sm btn-primary">Publish</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>

                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
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

{{-- ---------------------------------------------------------------------------------------------------------------------------------------- --}}
@extends('layouts.backend.main')

@section('title', 'Pages')

@section('content')
    <div class="container-fluid py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-1">Pages</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Page</li>
                    </ol>
                </nav>
            </div>
            <a href="{{ route('pages.create') }}" class="btn btn-primary shadow-sm px-4 py-2">
                <i class="icon-plus me-2"></i>Add New Page
            </a>
        </div>

        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table id="datatable" class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pages as $page)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ $page->title }}
                                        <div class="mt-1 small text-muted">
                                            <a href="{{ route('posts.edit', $page->id) }}" class="me-3 text-warning"
                                                onclick="return confirm('Are you sure you want to edit this post?')">
                                                <i class="far fa-edit me-1"></i><span class="small text">Edit</span>
                                            </a>
                                            <form action="{{ route('posts.destroy', $page->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link p-0 text-danger"
                                                    onclick="return confirm('Are you sure you want to delete this post?')">
                                                    <i class="fas fa-trash me-1"></i><span class="small text">Delete</span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            @php
                                                $badgeClass = match ($page->status) {
                                                    'published' => 'bg-secondary',
                                                    'scheduled' => 'bg-success',
                                                    'draft' => 'bg-danger',
                                                    default => 'bg-warning',
                                                };
                                            @endphp

                                            <span class="badge {{ $badgeClass }}">
                                                {!! $page->status === 'scheduled' ? '<i class="fas fa-clock"></i> ' . $page->status : $page->status !!}
                                            </span>
                                            {{-- <div class="text-center"> <span class="badge @if ($page->status === 'published') {{ 'bg-primary' }} @elseif ($page->status === 'scheduled'){{ 'bg-success' }} @elseif ($page->status === 'draft') {{ 'bg-danger' }} @else {{ 'bg-warning' }} @endif ">{!! $page->status === 'scheduled' ? '<i class="fas fa-clock"></i>' . $page->status : $page->status !!}</span> --}}
                                        </div>
                                        <div class="small text-muted mt-1">
                                            <small>
                                                <i class="fas fa-history"></i>
                                                {{ Carbon::parse($page->published_at)->diffForHumans() }}
                                            </small>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Date</th>
                            </tr>
                        </tfoot>
                    </table>
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
