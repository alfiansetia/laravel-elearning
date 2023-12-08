@extends('layouts.main')
@include('components.navbar')
@section('container')
    <div class="min-vh-100" style="background: linear-gradient(45deg, #19d3ae, #7e3af2);">
        <div class="d-flex justify-content-center pt-5">
            <div class="karturegister card mb-4" style="border-radius: 15px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);">
              
                <div class="card-header text-center mt-3" style="background-color: #fff; color: #000;">
                    <h1 class="fw-bold fs-5">Register</h1>
                </div>
                         
                

                <form class="container p-4" action="{{ route('register') }}" method="POST" enctype="multipart/form-data" style="background-color: #fff; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                    @csrf

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name">
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email">
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Password">
                        @error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2" placeholder="Re-Type Your Password">
                        @error('password_confirmation')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Gender</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Female
                            </label>
                        </div>
                        @error('gender')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="formGroupExampleInput2">
                        @error('dob')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Country</label>
                        <div>
                            <select class="form-select" name="country" id="floatingSelectGrid">
                                <option  value="" label="Choose a country" selected="selected">Choose a country</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Singapore">Singapore</option>
                            </select>
                        </div>
                        @error('country')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-grid gap-2 col-5 mx-auto">
                        <button type="submit" class="fw-bold btn btn-primary" style="background: linear-gradient(45deg, #805a90, #7bb6de);">Register </button>
                    </div>
                


                    <div class="text-center mt-3">
                        <label for="formGroupExampleInput2" class="form-label">Already have an account?</label>
                        <span><a href="/login" class="text-decoration-none">Login Here🚀</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
