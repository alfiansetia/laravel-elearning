@extends('layouts.main')

@section('container')
@include('components.navbar')
    <div class="container d-flex justify-content-center min-vh-100 pt-3">
        <div class="marginbottom col-lg-8">
            {{-- @dd($products); --}}
            @if(count($products) > 0)
            <div class="accordion" id="accordionExample">
            @foreach ($products as $product)
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="heading{{ $product->HeaderTransactionID }}">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $product->HeaderTransactionID }}" aria-expanded="false" aria-controls="collapse{{ $product->HeaderTransactionID }}">
                            Transaction Date {{ $product->created_at }}
                        </button>
                    </h2>
                    <div id="collapse{{ $product->HeaderTransactionID }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $product->HeaderTransactionID }}" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <table class="table table-sm table-borderless p-0 m-0">
                                <thead>
                                    <tr>
                                        <td colspan="3" class="col-lg-7 p-0 m-0"><h5>Name</h5></td>
                                        <td colspan="1" class="p-0 m-0"><h5>Quantity</h5></td>
                                        <td colspan="2" class="p-0 m-0"><h5>Sub Price</h5></td>
                                    </tr>
                                </thead>
                                <tbody class="table table-bordered">
                                @php
                                    $count = 0;
                                    $totalprice = 0;
                                @endphp
                                    @foreach ($product->transactionDetails as $item)
                                        @php
                                            $count += $item->quantity;
                                            $totalprice += $item->subtotal;
                                        @endphp
                                        <tr >
                                            {{-- @dd($item) --}}
                                            <td colspan="3" class="p-0 m-0">{{ $item->product->name}}</td>
                                            <td colspan="1">{{ $item->quantity }}</td>
                                            <td colspan="2">{{ $item->subtotal }}</td>
                                        </tr>
                                    @endforeach
                                    <thead class="table-bordered" >
                                        <tr>
                                            <td colspan="3" class="p-0 m-0"><h5>Total</h5></td>
                                            <td colspan="1"><h5>{{ $count }} Item(s)</h5></td>
                                            <td colspan="2"><h5>IDR {{ $totalprice }}</h5></td>
                                        </tr>
                                    </thead>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @else
                <div class="text-center mt-4 fw-bold">
                    <h3>Your History is Empty!</h3>
                    <a href="/"><button type="button" class="btn btn-outline-success mt-1">Shop More Product</button></a>
                </div>
            @endif
        </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: #023C82">
            © 2022 Sanskuy
        </div>
    </div>
@endsection
