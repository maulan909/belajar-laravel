@extends('layouts.auth')

@section('form')
<div class="auth-logo">
    <a href="/"><img src="assets/vendors/mazer/images/logo/logo.svg" alt="Logo"></a>
</div>
<h1 class="auth-title fs-1">Log in.</h1>
<p class="auth-subtitle mb-5 fs-5">Log in with your data that you entered during registration.</p>

<form action="index.html" method="post">
    <div class="form-group position-relative has-icon-left mb-4">
        <input type="text" class="form-control form-control-xl" placeholder="Username or Email" name="usernameOrEmail">
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