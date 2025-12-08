{{-- @extends('layouts.backend.main')

@section('tite', 'Posts')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Posts</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Posts</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-end">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary"><span><i class="icon-plus"></i> Create New
                            Post</span></a>
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
                                        <th>Author</th>
                                        <th>Categories</th>
                                        <th>Tags</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->title }}
                                                <div>
                                                    <sub>
                                                        <span class="ml-5">
                                                            <a href="{{ route('posts.edit', $post->id) }}"><span><i
                                                                        class="far fa-edit"></i></span>
                                                                Edit</a>
                                                        </span>
                                                        <span>
                                                            <form action="{{ route('posts.destroy', $post->id) }}"
                                                                method="POST" style="display:inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    onclick="return confirm('Are you sure you want to delete this post?')">
                                                                    <span><i class="fas fa-trash"></i></span>
                                                                    Delete</button>
                                                            </form>
                                                        </span>
                                                    </sub>
                                                </div>
                                            </td>
                                            <td>{{ $post->user->name }}</td>
                                            <td></td>
                                            <td>
                                                @foreach ($post->tags as $tag)
                                                    <div>
                                                        {{ $tag->name }}
                                                    </div>
                                                @endforeach
                                            </td>
                                            <td>
                                                <center>
                                                    <div>
                                                        {{ $post->status }}
                                                    </div>
                                                    <div>
                                                        {{ $post->published_at }}
                                                    </div>
                                                </center>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Categories</th>
                                        <th>Tags</th>
                                        <th>Date</th>
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


<!-- Improved UI for Posts Page (Bootstrap 5 Compatible) -->
@extends('layouts.backend.main')

@php
    use Carbon\Carbon;
@endphp
@section('title', 'Posts')

@section('content')
    <div class="container-fluid py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-1">Posts</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Posts</li>
                    </ol>
                </nav>
            </div>
            <a href="{{ route('posts.create') }}" class="btn btn-primary shadow-sm px-4 py-2">
                <i class="icon-plus me-2"></i>Add New Post
            </a>
        </div>

        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle" id="datatable">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th>Tags</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="fw-semibold">
                                        {{ $post->title }}
                                        <div class="mt-1 small text-muted">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="me-3 text-warning"
                                                onclick="return confirm('Are you sure you want to edit this post?')"
                                                data-bs-toggle="modal" data-bs-target="#editPost">
                                                <i class="far fa-edit me-1"></i><span class="small text">Edit</span>
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                    data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                @include('pages.backend.posts.edit')
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
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

                                    <td>{{ $post->user->name }}</td>

                                    <td class="text-muted">—</td>

                                    <td>
                                        @foreach ($post->tags as $tag)
                                            <span class="badge bg-secondary me-1">{{ $tag->name }}</span>
                                        @endforeach
                                    </td>

                                    <td>
                                        <div class="text-center">
                                            @php
                                                $badgeClass = match ($post->status) {
                                                    'published' => 'bg-secondary',
                                                    'scheduled' => 'bg-success',
                                                    'draft' => 'bg-danger',
                                                    default => 'bg-warning',
                                                };
                                            @endphp

                                            <span class="badge {{ $badgeClass }}">
                                                {!! $post->status === 'scheduled' ? '<i class="fas fa-clock"></i> ' . $post->status : $post->status !!}
                                            </span>
                                            {{-- <div class="text-center"> <span class="badge @if ($post->status === 'published') {{ 'bg-primary' }} @elseif ($post->status === 'scheduled'){{ 'bg-success' }} @elseif ($post->status === 'draft') {{ 'bg-danger' }} @else {{ 'bg-warning' }} @endif ">{!! $post->status === 'scheduled' ? '<i class="fas fa-clock"></i>' . $post->status : $post->status !!}</span> --}}
                                        </div>
                                        <div class="small text-muted mt-1">
                                            <small>
                                                <i class="fas fa-history"></i>
                                                {{ Carbon::parse($post->published_at)->diffForHumans() }}
                                            </small>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                        <tfoot class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Categories</th>
                                <th>Tags</th>
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
