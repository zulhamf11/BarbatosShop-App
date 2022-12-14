@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <form action="/search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>

    <div class="fluid-container card-container mt-4">
        <div class="row container-title d-flex align-items-center">
            <h5></h5>

        </div>

        <div class="row">
            @foreach ($data as $product)
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card" style="width: 100%;">
                        <a class="card-link" href="{{ route('detailProduct', $product->id) }}">
                            <div class="card h-100">
                                <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->product_name }}</h5>
                                    <p class="card-text">IDR {{ number_format($product->price) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
