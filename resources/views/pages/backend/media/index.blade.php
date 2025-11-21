{{-- @extends('layouts.backend.main')

@section('title', 'Media Library')

@section('content')
    <div></div>
    <div class="container">
        <div class="row">
            @foreach ($medias as $media)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="h2_blog-item mb-30">

                        <img src="{{ asset('storage/' . $media->path) }}" alt="{{ $media->alt }}" height="100"
                            width="200">

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection --}}


@extends('layouts.backend.main')

@section('title', 'Media Library')
@push('css')
    <style>
        .media-card {
            transition: all 0.2s ease-in-out;
        }

        .media-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.12);
        }

        .media-wrapper {
            overflow: hidden;
        }

        .media-img {
            transition: all 0.3s ease;
        }

        .media-card:hover .media-img {
            transform: scale(1.05);
        }

        .media-overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.45);
            opacity: 0;
            transition: 0.3s ease;
        }

        .media-card:hover .media-overlay {
            opacity: 1;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid py-3">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="fw-bold mb-1">Media Library</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Media</li>
                        </ol>
                    </nav>
                </div>
                <a href="{{ route('medias.create') }}" class="btn btn-primary shadow-sm px-4 py-2">
                <i class="icon-plus me-2"></i>Add New Media
            </a>
            </div>

            <div class="container">
                <div class="row g-4">

                    @foreach ($medias as $media)
                        <div class="col-xl-3 col-lg-4 col-md-6">

                            <div class="card shadow-sm border-0 media-card h-100">
                                <div class="media-wrapper position-relative">

                                    <img src="{{ asset('storage/' . $media->path) }}"
                                        class="card-img-top rounded-3 media-img" alt="{{ $media->alt }}" height="100"
                                        width="200">

                                    {{-- Hover Overlay --}}
                                    <div class="media-overlay d-flex align-items-center justify-content-center">
                                        <a href="{{ asset('storage/' . $media->path) }}" class="btn btn-light btn-sm">
                                            View
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection
