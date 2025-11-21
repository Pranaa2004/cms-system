@extends('layouts.backend.main')

@section('title', 'Tag')

@section('content')
    <div class="container-fluid py-3">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-1">Tags</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tag</li>
                    </ol>
                </nav>
            </div>

            {{-- Left side: Create Form --}}
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-5 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Add New Tag</h5>
                            </div>
                            <div class="card-body">
                                @include('pages.backend.tags.create')
                            </div>
                        </div>
                    </div>

                    {{-- Right side: Table --}}
                    <div class="col-lg-8 col-md-7">
                        <div class="card shadow-sm">
                            <div
                                class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Tag List</h5>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($tags as $tag)
                                                <tr>
                                                    <td class="fw-semibold">
                                                        {{ $tag->name }}
                                                        <div class="mt-1 small text-muted">
                                                            <a href="{{ route('tags.edit', $tag->id) }}"
                                                                class="me-3 text-warning"
                                                                onclick="return confirm('Are you sure you want to edit this post?')">
                                                                <i class="far fa-edit me-1"></i><span
                                                                    class="small text">Edit</span>
                                                            </a>
                                                            <form action="{{ route('tags.destroy', $tag->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-link p-0 text-danger"
                                                                    onclick="return confirm('Are you sure you want to delete this post?')">
                                                                    <i class="fas fa-trash me-1"></i><span
                                                                        class="small text">Delete</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-secondary">{{ $tag->slug }}</span></td>
                                                    <td>{{ $tag->description }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                        <tfoot class="table-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Description</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
