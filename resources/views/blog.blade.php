@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h1>Halaman {{ $title }}</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($posts as $post)
        <div class="col-md-12 mb-3">
            <h1><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h1>
            <h5>By : {{ $post->author }}</h5>
            <p>
                {{ $post->excerpt }}
            </p>
        </div>
        @endforeach
    </div>
</div>
@endsection