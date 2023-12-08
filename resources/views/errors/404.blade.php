@extends('layouts.main')

@section('container')
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <center>
                <h1 style="text-align: center">404 | Page Not Found!</h1>
                <a href="/""><button type="button" class="btn btn-danger">Go Back Home</button></a>
            </center>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: grey">
            © 2023 CStudy
        </div>
    </div>
@endsection
