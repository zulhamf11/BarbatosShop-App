@extends('layouts.apps')

@section('content')
    <div class="container">
        <button type="button" class="btn btn-success">Add +</button>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product name</th>
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
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->detail }}</td>
                            <td>
                                <button type="button" class="btn btn-danger">Delete</button>
                                <button type="button" class="btn btn-info">Edit</button>
                            </td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection()
