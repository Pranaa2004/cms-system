{{-- @extends('layouts.backend.main')

@section('title', 'Create Page')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Create Page</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('pages.index') }}">Pages</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Page</li>
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
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    value="{{ old('slug') }}" required>
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
@endsection --}}


@extends('layouts.backend.main')

@section('title', 'Create page')

@section('content')
    <div class="container-fluid py-3">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="fw-bold mb-1">Pages</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('pages.index') }}">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Page</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container-fluid">
                <div class="card shadow-sm border-0">
                    <div class="card-body py-4 px-4">
                        <form action="{{ route('pages.store') }}" method="page" enctype="multipart/form-data">
                            @csrf
                            {{-- TITLE --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Page Title</label>
                                <input type="text" name="title" class="form-control form-control-md"
                                    placeholder="Enter a clear, descriptive title" value="{{ old('title') }}" required>
                            </div>

                            {{-- CONTENT --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Content</label>
                                <textarea name="content" rows="6" class="form-control" placeholder="Write your content here..." required>{{ old('content') }}</textarea>
                            </div>

                            {{-- STATUS + PUBLISH TIME --}}
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Status</label>
                                    <select name="status" class="form-select">
                                        @foreach (\App\Enums\StatusEnum::cases() as $status)
                                            <option value="{{ $status->value }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Publish At</label>
                                    <input type="datetime-local" name="published_at" class="form-control">
                                </div>
                            </div>

                            {{-- IMAGE + EXPIRY --}}
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Feature Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Expire At</label>
                                    <input type="datetime-local" name="expires_at" class="form-control">
                                </div>
                            </div>

                            {{-- SUBMIT BUTTON --}}
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    Create Page
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
