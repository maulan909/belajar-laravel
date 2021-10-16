@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-4">
            <h1>{{ $post->title }}</h1>
            <h5>By : {{ $post->author }}</h5>
            <!-- untuk disable escape string -->
            {!! $post->body !!}
        </div>
        <div class="col-12">
            <a href="/blog" class="btn btn-secondary btn-sm">Kembali</a>
        </div>
    </div>
</div>
@endsection