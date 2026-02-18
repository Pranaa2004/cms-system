@extends('layouts.backend.main')

@section('title', 'Dashboard')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                    Welcome back, {{ Auth::user()->name }}!
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item text-muted active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card border-end shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 font-weight-medium">{{ $stats['posts'] }}</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Posts</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="opacity-7 text-primary font-20"><i class="bi bi-file-earmark-text"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card border-end shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 font-weight-medium">{{ $stats['pages'] }}</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Pages</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="opacity-7 text-success font-20"><i class="bi bi-file-earmark"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card border-end shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 font-weight-medium">{{ $stats['categories'] }}</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Categories</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="opacity-7 text-warning font-20"><i class="bi bi-collection"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 font-weight-medium">{{ $stats['tags'] }}</h2>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Total Tags</h6>
                            </div>
                            <div class="ms-auto">
                                <span class="opacity-7 text-info font-20"><i class="bi bi-tags"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h4 class="card-title mb-4 fw-bold text-dark">Quick Actions</h4>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('posts.create') }}" class="btn btn-primary w-100 py-3 rounded-3">
                                    <i class="bi bi-plus-circle me-2"></i> Create New Post
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('pages.create') }}" class="btn btn-outline-primary w-100 py-3 rounded-3">
                                    <i class="bi bi-plus-circle me-2"></i> Create New Page
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('category.index') }}" class="btn btn-outline-secondary w-100 py-3 rounded-3">
                                    <i class="bi bi-collection me-2"></i> Manage Categories
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('tags.index') }}" class="btn btn-outline-secondary w-100 py-3 rounded-3">
                                    <i class="bi bi-tags me-2"></i> Manage Tags
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- Recent History (Activity Log) --}}
            <div class="col-lg-8 mb-4">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-white py-3 border-0">
                        <h5 class="card-title mb-0 fw-bold text-dark">Recent History</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-0 px-4">User</th>
                                        <th class="border-0">Action</th>
                                        <th class="border-0">Item</th>
                                        <th class="border-0 px-4 text-end">Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($activities as $activity)
                                        <tr>
                                            <td class="px-4">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm bg-light rounded-circle me-2 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                                        <i class="bi bi-person text-muted"></i>
                                                    </div>
                                                    <span class="small fw-semibold text-dark">{{ $activity->user->name }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                @php
                                                    $actionBadge = match($activity->event) {
                                                        'created' => 'bg-success-subtle text-success',
                                                        'updated' => 'bg-info-subtle text-info',
                                                        'deleted' => 'bg-danger-subtle text-danger',
                                                        'viewed' => 'bg-secondary-subtle text-secondary',
                                                        default => 'bg-light text-dark'
                                                    };
                                                @endphp
                                                <span class="badge {{ $actionBadge }} rounded-pill px-3 py-2 small">
                                                    {{ ucfirst($activity->event) }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="small text-muted">{{ $activity->description }}</span>
                                            </td>
                                            <td class="px-4 text-end">
                                                <small class="text-muted">{{ $activity->created_at->diffForHumans() }}</small>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-5 text-muted">
                                                <i class="bi bi-clock-history display-4 mb-3 d-block"></i>
                                                No recent history found.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Notifications & Watch History --}}
            <div class="col-lg-4">
                {{-- Notifications --}}
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white py-3 border-0 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 fw-bold text-dark">Notifications</h5>
                        <span class="badge bg-danger rounded-pill">{{ count($notifications) }} New</span>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush">
                            @forelse($notifications as $notification)
                                <li class="list-group-item px-4 py-3 bg-light-subtle">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-primary-subtle text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                <i class="bi bi-bell"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 fw-bold text-dark small">{{ $notification->data['message'] ?? 'New Update' }}</h6>
                                            <small class="text-muted d-block">{{ $notification->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item text-center py-5 text-muted border-0">
                                    <i class="bi bi-bell-slash display-6 mb-2 d-block"></i>
                                    All caught up!
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    @if(count($notifications) > 0)
                        <div class="card-footer bg-white border-0 text-center py-3">
                            <a href="#" class="btn btn-link btn-sm text-primary text-decoration-none fw-bold">View All Notifications</a>
                        </div>
                    @endif
                </div>

                {{-- Recent Views (Watch History) --}}
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3 border-0">
                        <h5 class="card-title mb-0 fw-bold text-dark">Recent Views</h5>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush text-dark">
                            @php
                                $recentViews = $activities->where('event', 'viewed')->take(5);
                            @endphp
                            @forelse($recentViews as $view)
                                <li class="list-group-item px-4 py-3 border-0">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 small fw-bold text-dark">{{ $view->description }}</h6>
                                            <small class="text-muted">{{ $view->created_at->diffForHumans() }}</small>
                                        </div>
                                        <i class="bi bi-chevron-right text-muted small"></i>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item text-center py-5 text-muted border-0">
                                    <i class="bi bi-eye-slash display-6 mb-2 d-block"></i>
                                    No watch history yet.
                                </li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 12px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
@endsection
