{{-- @extends('layouts.backend.main')

@section('title', 'Create Post')

@section('content')
     <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Create Post</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('pages.index') }}">Post</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Post</li>
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
                    <div class="card-body" style="height: auto">
                        <form action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required placeholder="Add title" style="font-size:40px ; border:hidden">
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-10">
                                        <input type="text" class="form-control" id="content" placeholder="Add content" name="content" rows="5" style="border:hidden" required value="{{ old('content') }}">
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-primary rounded-circle "><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary rounded mt-auto">Create Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


@extends('layouts.backend.main')

@section('title', 'Create Post')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Create Post</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('pages.index') }}">Posts</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Post</li>
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
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" id="status" class="form-select">
                                            <option value="draft" selected>Draft</option>
                                            <option value="published">Published</option>
                                            <option value="archived">Archived</option>
                                            <option value="scheduled">Scheduled</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="published_at" class="form-label">Published at</label>
                                        <input type="datetime-local" class="form-control" id="published_at"
                                            name="published_at">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    </div>
                                    <div class="col-6">
                                        <label for="expires_at" class="form-label">Expires at</label>
                                        <input type="datetime-local" class="form-control" id="expires_at" name="expires_at">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Page</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
