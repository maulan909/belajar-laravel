@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Halaman {{ $title }}</h1>
            </div>
        </div>
        <div class="row">
            <p>{{ $name }}</p>
            <p>{{ $job }}</p>
        </div>
    </div>
@endsection