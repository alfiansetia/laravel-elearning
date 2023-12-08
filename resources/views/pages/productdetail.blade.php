@extends('layouts.main')

@section('container')
    @include('components.navbar')
    <div class="container justify-content-center pt-5 min-vh-100">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('purchase'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('purchase') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-3 shadow bg-white rounded">
            <div class="m-3">
                <div class="row mx-auto">
                    <div class="border border-secondary col-md-4 p-0 m-0">
                        {{-- @dd($product); --}}
                        <img src="{{ asset('storage/images/' . $product->photo) }}" class="img-fluid" alt="product">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">{{ $product->name }}</h3>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-muted">Price</small></p>
                                <p class="col-lg-10 card-text">{{ $product->price }} Coin</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="card-text"><small class="text-muted">Detail</small></p>
                                <p class="col-lg-10 card-text">{{ $product->detail }}</p>
                            </div>
                            <div>

                                <div class="mt-2">
                                    <a href="{{ route('home') }}"><button type="button"
                                            class="btn btn-outline-danger">Back</button></a>
                                    @auth
                                        @if ($product->isInCart(auth()->id()))
                                            <p>You own this course.</p>
                                        @else
                                            <button type="button" class="btn btn-outline-success"
                                                onclick="showPurchaseConfirmation()">Purchase</button>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start pt-1 pb-1" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: black">
            CStudy 2023
        </div>
    </div>

    <form action="{{ route('cart.store') }}" method="POST" id="add_to_cart">
        @csrf
        <input type="hidden" name="product" value="{{ $product->id }}">
    </form>
@endsection

<script>
    function showPurchaseConfirmation() {
        Swal.fire({
            title: "Do you want to purchase this product?",
            showDenyButton: true,
            confirmButtonText: "Confirm",
            denyButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                // Swal.fire("Purchase confirmed!", "", "success");
                document.getElementById('add_to_cart').submit();
            } else if (result.isDenied) {
                Swal.fire("Purchase canceled", "", "info");
            }
        });
    }
</script>
