@extends('layouts.auth')

@section('form')
<div class="auth-logo">
    <a href="index.html"><img src="assets/vendors/mazer/images/logo/logo.svg" alt="Logo"></a>
</div>
<h1 class="auth-title fs-1">Sign Up</h1>
<p class="auth-subtitle mb-5 fs-5">Input your data to register to our website.</p>

<form action="index.html">
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="text" class="form-control form-control-xl" placeholder="Name" name="name">
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="email" class="form-control form-control-xl" placeholder="Email" name="email">
        <div class="form-control-icon">
            <i class="bi bi-envelope"></i>
        </div>
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
        <div class="form-control-icon">
            <i class="bi bi-person"></i>
        </div>
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
    </div>
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="password2">
        <div class="form-control-icon">
            <i class="bi bi-shield-lock"></i>
        </div>
    </div>
    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Sign Up</button>
</form>
<div class="text-center mt-5 text-lg fs-5">
    <p class='text-gray-600'>Already have an account? <a href="/login" class="font-bold">Login</a>.</p>
    <hr>
    <p><a href="/" class="font-bold">Back to Home</a></p>
</div>
@endsection