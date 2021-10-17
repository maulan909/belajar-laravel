@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h1>{{ $title }}</h1>
        </div>
    </div>
    <div class="row">
        @if ($posts->count())
        <div class="col-md-12 text-center">
            <div class="card mb-3">
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                <div class="card-body">
                    <p class="card-text">
                        <small class="text-muted">
                            By <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/category/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                  <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                  <p class="card-text">{{ $posts[0]->excerpt }}</p>
                  <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read more..</a>
                </div>
              </div>
        </div>
        @endif
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a href="/category/{{  $post->category->slug  }}" class="text-decoration-none text-light">{{ $post->category->name }}</a>
                </div>
                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more..</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection