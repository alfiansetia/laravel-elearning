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
                    <form action="/manage/add" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{ old('name') }}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-2">
                            <label for="formGroupExampleInput2" class="form-label">Category</label>
                            <div>
                                <select class="form-select" name="CategoryID" id="floatingSelectGrid">
                                    <option  value="" label="Select a Category" selected>Select a Category</option>
                                    @foreach ($categories as $category)
                                        @if(old('CategoryID') == $category->CategoryID)
                                            <option value="{{ $category->CategoryID }}" selected>{{ $category->categoryName }}</option>
                                        @else
                                            <option value="{{ $category->CategoryID }}">{{ $category->categoryName }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Detail</label>
                            <textarea type="text" name="detail" class="form-control" id="formGroupExampleInput" rows="10">{{ old('detail') }}</textarea>
                        </div>
                        @error('detail')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-2">
                            <label for="formGroupExampleInput" class="form-label">Price</label>
                            <input type="text" name="price" class="form-control" id="formGroupExampleInput" value="{{ old('price') }}">
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
                            <button type="submit" class="btn btn-outline-success    ">Add</button>
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


