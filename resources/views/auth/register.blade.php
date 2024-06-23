<!-- resources/views/auth/register.blade.php -->
@extends('layouts.app')

@section('title', 'Register Page')

@section('content')
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <!-- Form untuk register -->
            <form action="{{ route('register') }}" method="POST" class="sign-up-form">
                @csrf
                <h2 class="title">Daftar</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" value="Daftar" class="btn">
                <p class="social-text">Atau Daftar dengan platform sosial</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>
            <!-- Form untuk login -->
            <form action="{{ route('login') }}" method="POST" class="sign-in-form">
                @csrf
                <h2 class="title">Masuk</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" value="Masuk" class="btn solid">
                <p class="social-text">Atau Masuk dengan platform sosial</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Belum Punya Akun?</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis, ex ratione. Aliquid!
                </p>
                <a href="{{ route('register') }}" class="btn transparent" id="sign-up-btn">
                    Daftar
                </a>
            </div>
            <img src="{{ asset('images/logo.png') }}" class="image" alt="">
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Sudah Punya Akun?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum laboriosam ad deleniti.
                </p>
                <a href="{{ route('login') }}" class="btn transparent" id="sign-in-btn">
                    Masuk
                </a>
            </div>
            <img src="{{ asset('images/logo.png') }}" class="image" alt="">
        </div>
    </div>
</div>
@endsection
