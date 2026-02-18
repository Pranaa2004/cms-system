@extends('layouts.backend.main')

@section('title', 'Edit Page')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 align-self-center mb-4">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Edit Page</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('pages.index') }}">Pages</a></li>
                        <li class="breadcrumb-item text-muted active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <form action="{{ route('pages.update', $page->id) }}" method="POST" enctype="multipart/form-data" id="page-form">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold">Page Title</label>
                                <input type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" 
                                       id="title" name="title" value="{{ old('title', $page->title) }}" required placeholder="Enter page title">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="content" class="form-label fw-bold">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" 
                                          id="content" name="content" rows="15" required placeholder="Page content goes here...">{{ old('content', $page->body) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold">Publishing</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="status" class="form-label fw-semibold">Status</label>
                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                                @foreach (\App\Enums\StatusEnum::cases() as $status)
                                    <option value="{{ $status->value }}" {{ old('status', $page->status) == $status->value ? 'selected' : '' }}>
                                        {{ ucfirst($status->name) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="published_at" class="form-label fw-semibold">Publish Date</label>
                            <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" 
                                   id="published_at" name="published_at" value="{{ old('published_at', $page->published_at ? \Carbon\Carbon::parse($page->published_at)->format('Y-m-d\TH:i') : '') }}">
                            @error('published_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="expires_at" class="form-label fw-semibold">Expiry Date (Optional)</label>
                            <input type="datetime-local" class="form-control @error('expires_at') is-invalid @enderror" 
                                   id="expires_at" name="expires_at" value="{{ old('expires_at', $page->expires_at ? \Carbon\Carbon::parse($page->expires_at)->format('Y-m-d\TH:i') : '') }}">
                            @error('expires_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning btn-lg text-white">
                                <i class="fas fa-save me-1"></i> Update Page
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold">Featured Image</h5>
                    </div>
                    <div class="card-body">
                        @if($page->media)
                            <div class="mb-3 text-center">
                                <img src="{{ asset('storage/' . $page->media->path) }}" alt="Current Image" class="img-fluid rounded shadow-sm border mb-2" style="max-height: 150px;">
                                <p class="small text-muted">Current image</p>
                            </div>
                        @endif
                        <div class="mb-3">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*" onchange="previewImg(this)">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="image-preview-container" class="mt-3 text-center d-none">
                            <img id="image-preview" src="#" alt="Preview" class="img-fluid rounded shadow-sm border" style="max-height: 200px;">
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script>
        function previewImg(input) {
            const preview = document.getElementById('image-preview');
            const container = document.getElementById('image-preview-container');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    container.classList.remove('d-none');
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                container.classList.add('d-none');
            }
        }
    </script>
@endpush
