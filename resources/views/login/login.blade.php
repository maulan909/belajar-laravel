@extends('layouts.auth')

@section('form')
<div class="auth-logo">
    <a href="/"><img src="assets/vendors/mazer/images/logo/logo.svg" alt="Logo"></a>
</div>
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<h1 class="auth-title fs-1">Log in.</h1>
<p class="auth-subtitle mb-5 fs-5">Log in with your data that you entered during registration.</p>

<form action="/login" method="post">
    <div class="input-group input-group-lg mb-3">
        <span class="input-group-text fs-3 py-1 px-2" id="username"><div class="form-control-icon">
            <i class="bi bi-person-bounding-box"></i>
        </div></span>
        <input type="text" class="form-control @error('username')
            is-invalid
        @enderror" placeholder="Username"
            aria-label="username" aria-describedby="username" name="username" value="{{ old('username') }}">
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="input-group input-group-lg mb-3">
        <span class="input-group-text fs-3 py-1 px-2" id="password"><div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div></span>
        <input type="password" class="form-control @error('password')
            is-invalid
        @enderror" placeholder="Password"
            aria-label="password" aria-describedby="password" name="password">
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3" type="submit">Log in</button>
</form>
<div class="text-center mt-5 text-lg fs-5">
    <p class="text-gray-600">Don't have an account? <a href="/register" class="font-bold">Register</a>.</p>
    <p><a class="font-bold" href="/forgot">Forgot password?</a>.</p>
    <hr>
    <p>
        <a href="/" class="font-bold">Back to Home</a>
    </p>
</div>
@endsection