@extends('layouts.main')

@section('content')
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <form action="/searchUserHome">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search">
                    <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    @foreach ($data as $categories)
        <div class="fluid-container card-container mt-4">
            <div class="row container-title d-flex align-items-center">
                <h5>{{ $categories->category_name }}</h5>
                <a href="{{ route('product_category_user', $categories->id) }}">View All</a>
            </div>

            <div class="row">
                @foreach ($categories->products as $item)
                    <div class="col-md-4 col-sm-12 mb-3">
                        <div class="card" style="width: 100%;">
                            <a class="card-link" href="{{ route('detail', $item->id) }}">
                                <div class="card h-100">
                                    <img src="{{ asset('images/' . $item->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->product_name }}</h5>
                                        <p class="card-text">IDR {{ number_format($item->price) }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>



        </div>
    @endforeach
@endsection
