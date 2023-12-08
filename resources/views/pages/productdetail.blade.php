@extends('layouts.main')

@php
    use App\Models\Product;
    use Illuminate\Support\Facades\Auth;
@endphp

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
                addToCart();
                Swal.fire("Purchase confirmed!", "", "success");
            } else if (result.isDenied) {
                Swal.fire("Purchase canceled", "", "info");
            }
        });
    }


    function addToCart() {
        // Set the quantity to 1
        const quantity = 1;

        // Fetch the CSRF token
        const csrfToken = document.querySelector("meta[name='csrf-token']").getAttribute("content");

        // Prepare the data for the request
        const data = {
            _token: csrfToken,
            quantity: quantity
        };

        // Make an AJAX request to the addToCart endpoint
        fetch('{{ route('cart.store', $product->id) }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(data)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data); // Log the response data
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });

    }
</script>
