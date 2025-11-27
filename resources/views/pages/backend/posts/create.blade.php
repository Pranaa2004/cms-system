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
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('posts.index') }}">Posts</a>
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
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="category" class="form-label">Category</label>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div id="modules">
                                                @foreach ($categories as $category)
                                                    <p class="drag"><a class="btn btn-default">{{ $category->name }}</a>
                                                    </p>
                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div id="dropzone"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags</label>
                                @foreach ($tags as $tag)
                                    <div class="form-check">
                                        <input type="checkbox" name="tags[]" id="{{ $tag->name }}"
                                            class="form-check-input" value="{{ $tag->id }}">
                                        <label for="{{ $tag->name }}" class="form-check-labe">{{ $tag->name }}</label>
                                    </div>
                                @endforeach
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
                                            name="published_at">
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
                                        <input type="datetime-local" class="form-control" id="expires_at" name="expires_at">
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Post</button>
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
    <div class="container-fluid py-3">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="fw-bold mb-1">Posts</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('posts.index') }}">Posts</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Post</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container-fluid">
                <div class="card shadow-sm border-0">
                    <div class="card-body py-4 px-4">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- TITLE --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Post Title</label>
                                <input type="text" name="title" class="form-control form-control-md"
                                    placeholder="Enter a clear, descriptive title" value="{{ old('title') }}" required>
                            </div>

                            {{-- CONTENT --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Content</label>
                                <textarea name="content" rows="6" class="form-control" placeholder="Write your content here..." required>{{ old('content') }}</textarea>
                            </div>

                            {{-- CATEGORY (drag UI improved layout) --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Category</label>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="p-3 border rounded bg-light" id="modules">
                                            <h6 class="fw-bold mb-3">Available Categories</h6>
                                            @foreach ($categories as $category)
                                                <p class="drag mb-2">
                                                    <a class="btn btn-outline-dark w-100">{{ $category->name }}</a>
                                                </p>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3 border rounded bg-light" id="dropzone">
                                            <h6 class="fw-bold mb-3">Selected Category</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- TAGS --}}
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Tags</label>
                                <div class="row">
                                    @foreach ($tags as $tag)
                                        <div class="col-md-3 col-sm-4 col-6">
                                            <div class="form-check mb-2">
                                                <input class="form-check-input" type="checkbox" name="tags[]"
                                                    id="tag-{{ $tag->id }}" value="{{ $tag->id }}">
                                                <label class="form-check-label" for="tag-{{ $tag->id }}">
                                                    {{ $tag->name }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
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
                                    <div class="" id="imageModal">
                                        <label class="form-label fw-semibold">Feature Image</label>
                                        <input type="file" class="form-control" id="uploadImage" name="image"
                                            accept="image/*">
                                    </div>
                                </div>

                                <div class="modal fade" id="imageCropModal" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" id="modalBody">
                                                {{-- Croping Image Here --}}
                                                <div class="" id="selectedImgEdit"></div>
                                                <img src="" alt="" class="" id="previewImage">
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2"
                                                    data-bs-toggle="modal">OK</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Hide this modal and show the first with the button below.
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                                                    data-bs-toggle="modal">Back to
                                                    first</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="" id="tesr"></div>
                                @push('js')
                                    <script>
                                        $(document).ready(function() {

                                            $('#imageCropModal').modal('hide');

                                            let cropper = null;

                                            $('#uploadImage').on('change', function() {
                                                if (this.files && this.files.length > 0) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(e) { // Set the onload event handler for the FileReader
                                                        $('#imageCropModal').modal('show');

                                                        var imageDataUrl = e.target.result;
                                                        $('#previewImage').attr('src', imageDataUrl);

                                                        //Check already have any4 cropped image in there
                                                        if (cropper !== null) {
                                                            $('#previewImage').croppie('destroy');
                                                        }

                                                        cropper = $('#previewImage').croppie({
                                                            url: e.target
                                                                .result, // e.target.result contains the data URL representing the image
                                                            viewport: {
                                                                width: 500,
                                                                height: 250,
                                                                type: 'square'
                                                            },
                                                            boundary: {
                                                                width: 300,
                                                                height: 300
                                                            }

                                                        });

                                                    }
                                                    reader.readAsDataURL(this.files[0]);
                                                }
                                            });
                                        });
                                    </script>
                                    {{-- <script>
                                        let cropper = null;
                                        $('#uploadImage').on('change', function() {
                                            if (!this.files || !this.files[0]) return;

                                            let reader = new FileReader();

                                            reader.onload = function(e) {
                                                $('#imageCropModal').modal('show');

                                                if (cropper !== null) {
                                                    $('#selectedImgEdit').croppie('destroy');
                                                }

                                                cropper = $('#selectedImgEdit').croppie({
                                                    url: e.target.result,
                                                    viewport: {
                                                        width: 200,
                                                        height: 200,
                                                        type: 'square'
                                                    },
                                                    boundary: {
                                                        width: 300,
                                                        height: 300
                                                    }
                                                });
                                            };

                                            reader.readAsDataURL(this.files[0]);
                                        });
                                    </script> --}}
                                @endpush
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Expire At</label>
                                    <input type="datetime-local" name="expires_at" class="form-control">
                                </div>
                            </div>

                            {{-- SUBMIT BUTTON --}}
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    Create Post
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        for (var i = 0; i < this.files.length; i++) {
            var file = this.files[i];
            console.log("File " + i + ": " + file.name);
        }
    </script> --}}

@endsection
