@extends('layouts.main', ['title' => 'Register'])
@include('components.navbar')
@section('container')
    <div class="min-vh-100" style="background: linear-gradient(45deg, #19d3ae, #7e3af2);">
        <div class="d-flex justify-content-center pt-5">
            <div class="karturegister card mb-4" style="border-radius: 15px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">

                <div class="card-header text-center mt-3" style="background-color: #fff; color: #000;">
                    <h1 class="fw-bold fs-5">Register</h1>
                </div>

                <form class="container p-4" action="{{ route('register') }}" method="POST" enctype="multipart/form-data"
                    style="background-color: #fff; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Enter Your Name" required value="{{ old('name') }}">
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="Enter Your Email" required value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label @error('password') is-invalid @enderror">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter Your Password" required>
                        @error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="confirm" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation"
                            class="form-control @error('password_confirmation') is-invalid @enderror" id="confirm"
                            placeholder="Re-Type Your Password">
                        @error('password_confirmation')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="Male"
                                {{ old('gender') == 'Male' ? 'checked' : '' }}>
                            <label class="form-check-label" for="gender1">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="Female"
                                {{ old('gender') == 'Female' ? 'checked' : '' }}>
                            <label class="form-check-label" for="gender2">Female</label>
                        </div>
                        @error('gender')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror"
                            id="dob" required value="{{ old('dob') }}">
                        @error('dob')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <div>
                            <select class="form-select @error('country') is-invalid @enderror" name="country" id="country"
                                required>
                                <option value="" label="Choose a country" selected="selected">Choose a country
                                </option>
                                <option {{ old('country') == 'Indonesia' ? 'selected' : '' }} value="Indonesia">Indonesia
                                </option>
                                <option {{ old('country') == 'Malaysia' ? 'selected' : '' }} value="Malaysia">Malaysia
                                </option>
                                <option {{ old('country') == 'Singapore' ? 'selected' : '' }} value="Singapore">Singapore
                                </option>
                            </select>
                        </div>
                        @error('country')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 col-5 mx-auto">
                        <button type="submit" class="fw-bold btn btn-primary"
                            style="background: linear-gradient(45deg, #805a90, #7bb6de);">Register </button>
                    </div>

                    <div class="text-center mt-3">
                        <label for="formGroupExampleInput2" class="form-label">Already have an account?</label>
                        <span><a href="{{ route('login') }}" class="text-decoration-none">Login Here🚀</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
