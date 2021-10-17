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
        <div class="col-md-12 mb-3 border-bottom pb-3">
            <article>
                <h1><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h1>
                <p>By : <a href="author/{{ $post->user->id }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                <p>
                    {{ $post->excerpt }}
                </p>
                <a href="/blog/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
            </article>
        </div>
        @endforeach
    </div>
</div>
@endsection