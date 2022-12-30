@extends('layouts.apps')

@section('content')
    <div class="container" style="width: 100%;">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-7">
                <div class="mb-2">
                    <a href="#" style="text-decoration: none;">
                        <a href="/manageproduct" type="button" class="btn btn-secondary">
                            <i style="color:white" class="fas fa-arrow-circle-left"></i> Back
                        </a>
                    </a>
                </div>
                <div class="card">
                    <p class="card-header text-left">Add Product</h4>
                    <div class="card-body">
                        <form action="/insertproduct" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="product_name">
                                    <span class="text-danger"></span>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-select" aria-label="Default select example" name="category_name">
                                    <option selected hidden disabled value="">Select a Category</option>
                                    <option value="Onitsuka Serrano">Onitsuka Serrano</option>
                                    <option value="Onitsuka Mexico">Onitsuka Mexico</option>
                                </select>
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Detail</label>
                                <textarea class="form-control" id="description" rows="7" name="detail"></textarea>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group mb-3">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Photo</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                                <span class="text-danger"></span>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
