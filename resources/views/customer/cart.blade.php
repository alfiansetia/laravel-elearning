@extends('layouts.main')

@section('container')
@include('components.navbar')
    <div class="container d-flex justify-content-center min-vh-100 pt-2">
        <div class="marginbottom col-lg-6">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('checkout'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('checkout') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($products->count() > 0)
                @foreach ($products as $product)
                {{-- @dd($product) --}}
                <div class="card mb-3">
                    <div class="d-flex row-cols-lg-3">
                            <div class="col-lg-4">
                                <img src="{{ asset('storage/images/'.$product->products[0]->photo) }}" class="img-fluid rounded-start" alt="produk">
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title fw-bold">{{ Str::limit($product->products[0]->name, 25) }}</h5>
                                        <div class="d-flex">
                                            <form action="/carts/{{$product->CartID}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                {{-- @dd($product); --}}
                                                <!-- <button class="btn btn-outline-danger" type="submit" id="button-addon2" onclick="return confirm('Are you sure want to Delete this product?')"><i class="bi bi-trash-fill"></i></button> -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- <span>
                                        Quantity: {{ $product->quantity }}
                                    </span> -->
                                    <div class="mt-3">
                                        <p>
                                            Total Price: {{ $product->totalprice }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @php
                    $count += $product->totalprice;
                @endphp
                @endforeach
                <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
                    <!-- <div class="text-center p-2">
                        <span class="me-5">Total Price :{{ $count }} Coin</span>
                        <form action="{{ route('checkout', $count) }}" method="POST" enctype="multipart/form-data" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-success me-1" onclick="return confirm('Are you sure want to Purchase this product?')">Purchase</button>
                        </form>
                    </div> -->
                </div>
            @else
                <div class="text-center mt-4 fw-bold">
                    <h3>Your Cart is Empty!</h3>
                    <a href="/"><button type="button" class="btn btn-outline-success mt-1">Shop More Product</button></a>
                </div>
            @endif
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection

