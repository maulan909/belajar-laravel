@extends('layouts.admin.admin')

@section('adminContent')
    <div class="row">
        <div class="col-12 col-lg-8">
            <div>
                <a href="/dashboard/post" class="btn btn-info"><i class="bi bi-arrow-left"></i> Back to all post</a>
                <a href="#" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
                <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a>
            </div>
            <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mx-auto my-3">
            <div class="card">
                <div class="card-body">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection