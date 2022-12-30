@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-lg-10 col-15 mt-5 mx-auto my-auto search-box">
        <div class="input-group form-container">
            <input type="text" name="Search" class="form-control search-input" autofocus="autofocus" autocomplete="off">
            <span class="input-group-btn" style="background-color: rgb(114, 113, 113); border: none;">
                <button class="btn btn-search">
                    <img src="{{ asset('images/search.png.png') }}" width="20">
                </button>
            </span>
        </div>
    </div>

    <div class="fluid-container card-container mt-5">
        <div class="row container-title d-flex align-items-center">
            <h5></h5>
            <a href="#">View All</a>
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
                                    <p class="card-text">IDR {{ $product->price }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
