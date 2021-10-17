@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>All Categories</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <ul>
                @foreach($categories as $category)
                <li>
                    <a href="category/{{ $category->slug }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection