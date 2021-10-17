@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 mb-4">
            <h1>{{ $post->title }}</h1>
            <p>By : <a href="author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <!-- untuk disable escape string -->
            <img src="https://source.unsplash.com/1000x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            <article class="fs-5 mt-3">
                {!! $post->body !!}
            </article>
            <a href="/blog" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
</div>
@endsection