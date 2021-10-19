@extends('layouts.auth')

@section('form')
<div class="auth-logo">
    <a href="index.html"><img src="assets/vendors/mazer/images/logo/logo.svg" alt="Logo"></a>
</div>
<h1 class="auth-title fs-1">Register</h1>
<p class="auth-subtitle mb-5 fs-5">Input your data to register to our website.</p>

<form action="/register" method="post">
    @csrf
    <div class="input-group input-group-lg mb-3">
        <span class="input-group-text fs-3 py-1 px-2" id="name"><div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div></span>
        <input type="text" class="form-control @error('name')
            is-invalid
        @enderror" placeholder="Name"
            aria-label="Name" aria-describedby="name" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
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
        <span class="input-group-text fs-3 py-1 px-2" id="email"><div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div></span>
        <input type="email" class="form-control @error('email')
            is-invalid
        @enderror" placeholder="Email"
            aria-label="email" aria-describedby="email" name="email" value="{{ old('email') }}">
        @error('email')
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
    <div class="input-group input-group-lg mb-3">
        <span class="input-group-text fs-3 py-1 px-2" id="password_confirmation"><div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div></span>
        <input type="password" class="form-control @error('password_confirmation')
            is-invalid
        @enderror" placeholder="Confirm Password"
            aria-label="password_confirmation" aria-describedby="password_confirmation" name="password_confirmation">
        @error('password_confirmation')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Register</button>
</form>
<div class="text-center mt-5 text-lg fs-5">
    <p class='text-gray-600'>Already have an account? <a href="/login" class="font-bold">Login</a>.</p>
    <hr>
    <p><a href="/" class="font-bold">Back to Home</a></p>
</div>
@endsection