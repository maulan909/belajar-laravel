@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row my-3">
        <div class="col text-center">
            <h1>{{ $title }}</h1>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @if ($posts->count())
        <div class="col-md-12 text-center">
            <div class="card mb-3">
                @if ($posts[0]->image)
                    <div style="max-height: 400px; overflow:hidden" class="card-img-top">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->image }}" class="w-100">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                @endif
                <div class="card-body">
                    <p class="card-text">
                        <small class="text-muted">
                            By <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <h3 class="card-title"><a href="/blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read more..</a>
                </div>
            </div>
        </div>
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                    <a href="/blog?category={{  $post->category->slug  }}" class="text-decoration-none text-light">{{ $post->category->name }}</a>
                </div>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top w-100" alt="{{ $post->image }}">
                @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more..</a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h3 class="text-center">Post Not Found.</h3>
        @endif
    </div>
    <div class="row">
        <div class="col d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection