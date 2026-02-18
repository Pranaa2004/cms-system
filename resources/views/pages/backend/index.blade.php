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
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Quick Actions</h4>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('posts.create') }}" class="btn btn-primary w-100 py-3">
                                    <i class="bi bi-plus-circle me-2"></i> Create New Post
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('pages.create') }}" class="btn btn-outline-primary w-100 py-3">
                                    <i class="bi bi-plus-circle me-2"></i> Create New Page
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('category.index') }}" class="btn btn-outline-secondary w-100 py-3">
                                    <i class="bi bi-collection me-2"></i> Manage Categories
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <a href="{{ route('tags.index') }}" class="btn btn-outline-secondary w-100 py-3">
                                    <i class="bi bi-tags me-2"></i> Manage Tags
                                </a>
                            </div>
                        </div>
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
