@extends('layouts.admin.admin')

@section('adminContent')
    <div class="row">
        <div class="col-12 col-lg-8">
            <div>
                <a href="/dashboard/post" class="btn btn-info"><i class="bi bi-arrow-left"></i> Back to all post</a>
                <a href="/dashboard/post/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i>
                    Edit</a>
                <form action="/dashboard/post/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                            class="bi bi-trash"></i> Delete</button>
                </form>
            </div>
            @if ($post->image)
                <div style="max-height: 300px; overflow:hidden" class="my-3">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image }}" class="w-100">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mx-auto my-3">
            @endif
            <div class="card">
                <div class="card-body">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection
