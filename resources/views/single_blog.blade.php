@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-4">
            <h1>{{ $post->title }}</h1>
            <p>By : <a href="author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <!-- untuk disable escape string -->
            {!! $post->body !!}
        </div>
        <div class="col-12">
            <a href="/blog" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
</div>
@endsection