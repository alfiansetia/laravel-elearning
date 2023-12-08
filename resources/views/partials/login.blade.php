@extends('layouts.main')

@include('components.navbar')

@section('container')
    <div class="d-flex justify-content-center align-items-center vh-100" style="background: linear-gradient(45deg, #19d3ae, #7e3af2);">
        <div class="card p-4" style="background-color: #fff; border-radius: 15px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card-header text-center" style="background-color: #fff; color: #000;">
                <h1 class="fw-bold fs-5">Login</h1>
            </div>
                      

            <form action="/login" method="POST" enctype="multipart/form-data" class="mt-3">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter Your Email" autofocus required>
                    @error('email')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password" required>
                    @error('password')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="rememberme" class="form-check-input" id="rememberme">
                    <label class="form-check-label" for="rememberme">Remember me</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="fw-bold btn btn-primary" style="background: linear-gradient(45deg, #8e44ad, #3498db);">Login </button>
                </div>
                

                <div class="text-center mt-3">
                    <span>Don't have an account? <a href="/register" class="text-decoration-none">Register Here 🏆</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection
