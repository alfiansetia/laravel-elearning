@extends('layouts.main')

@section('container')
    <style>
        body {
            background-color: #f8f8f8;
            /* Warna latar belakang putih pastel */
            color: #333;
            /* Warna teks */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Font yang lebih umum dan elegan */
        }

        form {
            margin-top: 50px;
            text-align: center;
        }

        .input-group {
            background: rgba(255, 255, 255, 0.8);
            /* Latar belakang semi-transparan putih */
            border: 1px solid #b3b3ff;
            /* Warna border (ungu) */
            border-radius: 5px;
            overflow: hidden;
        }

        .form-control {
            background: transparent;
            border: none;
            color: #333;
        }

        .btn-outline-secondary {
            background: #b3b3ff;
            /* Warna tombol (ungu) */
            border: none;
            color: #fff;
            transition: background 0.3s ease;
        }

        .btn-outline-secondary:hover {
            background: #9191e9;
            /* Warna hover yang sedikit lebih gelap (ungu) */
        }

        /* Gaya kartu produk */
        .card {
            background: #fff;
            /* Warna kartu (putih) */
            border: 2px solid #b3b3ff;
            /* Warna border kartu (ungu) dan tebal outline */
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            margin-top: 20px;
        }

        .card:hover {
            transform: scale(1.05);
            /* Membesar saat dihover */
        }

        .card-header {
            background: linear-gradient(45deg, #19d3ae, #7e3af2);
            /* Gradient warna header kartu (biru ke ungu) */
            color: #fff;
            /* Warna teks header kartu */
            border-bottom: 2px solid #9191e9;
            /* Warna border bawah header kartu (ungu) dan tebal outline */
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }

        .card-body {
            padding: 15px;
            text-align: center;
        }

        .kartu {
            max-height: 150px;
            /* Tinggi maksimum gambar kartu produk */
            object-fit: cover;
            border-bottom: 2px solid #9191e9;
            /* Warna border bawah kartu (ungu) dan tebal outline */
            margin-bottom: 10px;
        }

        /* Gaya link "View All" */
        .text-decoration-none {
            color: #fff;
            /* Warna link (putih) */
            transition: color 0.3s ease;
            display: block;
            margin-top: 10px;
            text-align: center;
        }

        .text-decoration-none:hover {
            color: #333;
            /* Warna hover link yang sedikit lebih gelap */
        }
    </style>

    @include('components.navbar')
    <div class="container min-vh-100 pb-5">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="">
            <div class="input-group mb-3 mt-2">
                <input type="text" class="form-control" placeholder="Search" name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i>
                </button>
            </div>
        </form>

        <div class="row justify-content-center">
            @foreach ($category as $key => $item)
                <div class="row justify-content-center mt-1 my-3">
                    <div class="card">
                        <div class="row">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <span class="ms-4">{{ $item->name }}</span>
                                <span>
                                    <a href="{{ route('category.show', $item->id) }}"
                                        class="text-decoration-none mb-2 me-4">View All</a>
                                </span>
                            </div>

                            <div class="mb-3">
                                <div class="kolom d-flex">
                                    @forelse ($category[$key]->products()->limit(7)->get() as $item)
                                        <div class="col-lg-3 py-3 px-2">
                                            <a href="{{ route('product.show', $item->id) }}"
                                                class="text-decoration-none text-black">
                                                <div class="card">
                                                    <img src="{{ asset('storage/images/' . $item->photo) }}"
                                                        class="kartu card-img-top" alt="Product">
                                                    <div class="card-body" style = 'margin-bottom: -5px;'>
                                                        <h6 class="fw-normal ">{{ Str::limit($item->name, 25) }}
                                                        </h6>
                                                        <h6 class="card-text fw-bold">{{ $item->price }} Coin</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @empty
                                        <div class="container text-center mt-3">
                                            <td class="align-middle">
                                                <h5>There is no Product!</h5>
                                            </td>
                                        </div>
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

    <div class="shadowtop text-center text-lg-start pt-1 pb-1"
        style="background-color: rgba(255, 255, 255, 0.9); box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div class="text-center p-2 fw-bold" style="color: black">
            CStudy 2023
        </div>
    </div>
@endsection
