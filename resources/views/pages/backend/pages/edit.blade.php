@extends('layouts.backend.main')

@section('title', 'Create Page')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Edit Page</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('pages.index') }}">Pages</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required
                                    value="{{ $page->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" required
                                    value="{{ $page->slug }}">
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $page->body }}</textarea>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" id="status" class="form-select">
                                            <option value="draft"
                                                @if ($page->status == 'draft') @selected(true) @endif>Draft
                                            </option>
                                            <option value="published"
                                                @if ($page->status == 'published') @selected(true) @endif>
                                                Published</option>
                                            <option value="archived"
                                                @if ($page->status == 'archived') @selected(true) @endif>
                                                Archived</option>
                                            <option value="scheduled"
                                                @if ($page->status == 'scheduled') @selected(true) @endif>
                                                Scheduled</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="published_at" class="form-label">Published at</label>
                                        <input type="datetime-local" class="form-control" id="published_at"
                                            name="published_at" value="{{ $page->published_at }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>

                                            {{-- Show existing image if available --}}
                                            @if (!empty($page->featured_media_id))
                                                <div class="mb-2">
                                                    <a href="{{ asset('storage/' . $page->media->path) }}"><img
                                                            src="{{ asset('storage/' . $page->media->path) }}"
                                                            alt="{{ $page->title }}" width="120"
                                                            class="rounded shadow-sm"></a>
                                                </div>
                                            @endif

                                            {{-- Upload new image --}}
                                            <input type="file" class="form-control" id="image" name="image"
                                                accept="image/*">
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <label for="expires_at" class="form-label">Expires at</label>
                                        <input type="datetime-local" class="form-control" id="expires_at" name="expires_at"
                                            value="{{ $page->expires_at }}">
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Update Page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
