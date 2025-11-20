@extends('layouts.backend.main')

@section('title', 'Create Media')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title">Create Media</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('category.index') }}">Media</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Create Media</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('medias.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <div class="cart">
                                <div class="cart-body">
                                    <input type="file" class="form-control form-control-lg" id="image" name="image"
                                        accept="image/*">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="cart-footer mx-4 my-1">
                                <button type="submit" class="btn btn-primary"><span><i class=" fas fa-plus"></i></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
