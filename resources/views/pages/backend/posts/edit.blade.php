{{-- @extends('layouts.backend.main')

@section('title', 'Edit Post')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Edit Post</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('posts.index') }}">Posts</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $post->title }}" required>
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->body }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                {{-- this is the start for the drop down --}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="modules">
                                                    {{-- @foreach ($categories as $category)
                                                        <p class="drag"><a class="btn btn-default">{{ $category->name }}</a>
                                                        </p>
                                                    @endforeach --}}
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div id="dropzone"></div>
                                        </div>
                                    </div>
                                </div>

                                {{-- this is the end for the drop down --}}
                            </div>

                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags</label>
                                {{-- @foreach ($tags as $tag)
                                    <div class="form-check">
                                        <input type="checkbox" name="tags[]" id="{{ $tag->name }}"
                                            class="form-check-input" value="{{ $tag->id }}">
                                        <label for="{{ $tag->name }}" class="form-check-labe">{{ $tag->name }}</label>
                                    </div>
                                @endforeach --}}
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select name="status" id="status" class="form-select">
                                            @foreach (\App\Enums\StatusEnum::cases() as $status)
                                                <option value="{{ $status->value }}">
                                                    {{ $status->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="published_at" class="form-label">Published at</label>
                                        <input type="datetime-local" class="form-control" id="published_at"
                                            name="published_at" value="{{ $post->published_at }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            accept="image/*">
                                    </div>
                                    <div class="col-6">
                                        <label for="expires_at" class="form-label">Expires at</label>
                                        <input type="datetime-local" class="form-control" id="expires_at" name="expires_at"
                                            value="{{ $post->published_at }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary rounded-pill px-3">Update Post</button>
                                    </div>
                                    <div class="col-9">
                                        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--
@endsection --}}
