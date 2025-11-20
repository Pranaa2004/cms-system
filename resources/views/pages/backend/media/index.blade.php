@extends('layouts.backend.main')

@section('title', 'Media Library')

@section('content')
    <div></div>

        <div class="container">
            <div class="row">
                @foreach ($medias as $media)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="h2_blog-item mb-30">
                            {{-- <div class="h2_blog-img"> --}}
                                <img src="{{ asset('storage/' . $media->path) }}" alt="{{ $media->alt }}" height="100"
                                    width="200">
                            {{-- </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
 

@endsection
