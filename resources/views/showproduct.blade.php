@extends('layouts.app')

@section('content')
    <div class="container" style="width: 100%;">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-7">
                <div class="mb-2">
                    <a href="{{ route('manageproduct') }}" style="text-decoration: none;">
                        <button type="button" class="btn btn-secondary">
                            <i style="color:white" class="fas fa-arrow-circle-left"></i> Back
                        </button>
                    </a>
                </div>
                <div class="card">
                    <p class="card-header text-left">Edit Product</h4>
                    <div class="card-body">
                        <form action="/updateproduct/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="product_name"
                                        value="{{ $data->product_name }}">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" aria-label="Default select example" name="category_name">
                                    <option selected hidden disabled value="">Select a Category</option>
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Detail</label>
                                <textarea class="form-control" id="description" rows="7" name="detail">{{ $data->detail }}</textarea>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group mb-3">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        value="{{ $data->price }}">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Photo</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                                <span class="text-danger">{{ $data->image }}</span>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
