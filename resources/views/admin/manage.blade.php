@extends('layouts.main')

@section('container')
@include('components.navbar')
    <div class="container min-vh-100 pb-5">
        <div class="container p-0 m-0">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="d-flex justify-content-between mt-2">
                <div class="col-lg-4">
                    <form action="/manage">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <a href="/manage/add">
                    <button class="btn btn-secondary" type="submit" id="button-addon2">Add Product <i class="fa fa-plus ms-1" aria-hidden="true"></i>
                    </button>
                </a>
            </div>
            @if($product->isNotEmpty())
                @foreach ($product as $products)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="{{ asset('storage/images/'.$products->photo) }}" class="img-fluid rounded-start" style="max-height: 250px" alt="produk">
                                {{-- <span>{{ $products->photo }}</span> --}}
                            </div>
                            <div class="col-md-10">
                                <div class="d-flex justify-content-between card-body">
                                    <h5 class="card-title fw-bold">{{ $products->name }}</h5>
                                    <div class="d-flex">
                                        <form action="/manage/update/{{ $products->ProductID }}" method="GET">
                                            @csrf
                                            <button class="btn btn-outline-warning me-2" type="submit" id="button-addon2"><i class="bi bi-pencil-fill"></i></button>
                                        </form>
                                        <form action="/manage/delete/{{ $products->ProductID }}" method="POST">
                                            @csrf
                                            <button class="btn btn-outline-danger" type="submit" id="button-addon2" onclick="return confirm('Are you sure want to Delete this product?')"><i class="bi bi-trash-fill"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="card container justify-content-center align-items-center mt-1 fw-bold" style="height: 200px">
                    <h3>There is no Product!</h3>
                </div>
            @endif
            <div class="d-flex justify-content-center">
                {{ $product->links() }}
            </div>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: #023C82">
            © 2022 Sanskuy
        </div>
    </div>
@endsection
