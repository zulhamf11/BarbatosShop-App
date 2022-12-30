@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/addproduct" type="button" class="btn btn-success">Add +</a>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Price</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->product_name }}</td>
                            <td>
                                <img src="{{ asset('images/' . $product->image) }}" alt="..." style="width: 100px;">
                            </td>
                            <td>IDR {{ number_format($product->price) }}</td>
                            <td>{{ $product->detail }}</td>
                            <td>
                                <a href="/showproduct/{{ $product->id }}" type="button" class="btn btn-info">Edit</a>
                                <a href="/deleteproduct/{{ $product->id }}" type="button"
                                    class="btn btn-danger">Delete</a>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection()
