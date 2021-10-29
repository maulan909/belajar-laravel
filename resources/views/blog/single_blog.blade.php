@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 mb-4">
            <h1>{{ $post->title }}</h1>
            <p>By : <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <!-- untuk disable escape string -->
            @if ($post->image)
                <div style="max-height: 300px; overflow:hidden" class="my-3">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image }}" class="w-100">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="fs-5 mt-3">
                {!! $post->body !!}
            </article>
            <a href="/blog" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
</div>
@endsection