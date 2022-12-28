@extends('layouts.apps')
@section('content')
    <div class="row bg-secondary bg-dark text-white">
        <div class="col">
            <h4>Category</h4>
        </div>
    </div>
    {{-- card --}}
    <div class="container mt-4">
        <div class="row">
            @foreach ($data as $product)
                <div class="col-md-3 col-sm-12 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('image/' . $product->products->image) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->proudcts->product_name }}</h5>

                            <p class="price">{{ $product->products->price }}</p>
                            {{-- <a href="{{ route('book_Detail', $book->books->id) }}" class="btn btn-primary">Detail</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection()
