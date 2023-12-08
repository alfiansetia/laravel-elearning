@extends('layouts.main')

@section('container')
@include('components.navbar')
    <div class="container min-vh-100">
        {{-- <div class="container"> --}}
            <div class="col-7 mx-auto pt-2">
                <a href="/manage">
                    <button type="submit" class="btn btn-secondary"><i class="bi bi-arrow-left-circle me-1"></i>Back</button>
                </a>
            </div>
            {{-- <a href="/manage">back</a> --}}
        {{-- </div> --}}
        <div class="d-flex justify-content-center pt-3 mb-5">
            <div class="card col-lg-7">
                <div class="card-header">
                Add Product
                </div>
                <div class="card-body">
                    <form action="{{ route('storeUpdate', $product->ProductID) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{ $product->name }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        {{-- @dd($product) --}}
                        <div class="mb-2">
                            <label for="formGroupExampleInput2" class="form-label">Genre</label>
                            <div>
                                <select class="form-select" name="CategoryID" id="floatingSelectGrid">
                                    @if ($product->category->CategoryID == 1)
                                        <option  value="{{ $product->category->CategoryID }}" selected="selected">{{ $product->category->categoryName }}</option>
                                        <option value="2">Accessories & Beauty</option>
                                        <option value="3">Home Decor & Craft</option>
                                    @elseif ($product->category->CategoryID == 2)
                                        <option  value="{{ $product->category->CategoryID }}" selected="selected">{{ $product->category->categoryName }}</option>
                                        <option value="1">Food & Baverage</option>
                                        <option value="3">Home Decor & Craft</option>
                                    @else
                                        <option  value="{{ $product->category->CategoryID }}" selected="selected">{{ $product->category->categoryName }}</option>
                                        <option value="1">Food & Baverage</option>
                                        <option value="2">Accessories & Beauty</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Description</label>
                            <textarea type="text" name="detail" class="form-control" id="formGroupExampleInput" rows="10">{{ $product->detail }}</textarea>
                        </div>
                        @error('detail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="formGroupExampleInput" value="{{ $product->price }}">
                        </div>
                        @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-4">
                            <label for="formFile" class="form-label">Photo</label>
                            <input class="form-control" name="photo" type="file" id="formFile">
                        </div>
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-2">
                            <button type="submit" class="btn btn-outline-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold" style="color: #023C82">
            © 2022 Sanskuy
        </div>
    </div>
@endsection
