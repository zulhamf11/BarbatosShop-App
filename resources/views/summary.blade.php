@extends('layouts.main')

@section('content')
    <div class="container">
        @foreach ($order as $order)
            <div class="row bg-secondary bg-dark text-white mt-4">
                <div class="col justify-content-center">
                    <h5>Transaction date {{ $order->date }}</h5>
                </div>
            </div>
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">Product name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $qty = 0;
                            
                        @endphp
                        @foreach ($data as $product)
                            <tr>

                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->qty }}</td>
                                <td>IDR {{ number_format($product->total_price) }}</td>



                            </tr>
                            @php
                                $qty += $product->qty;
                            @endphp
                        @endforeach
                        <th scope="col">Total</th>

                        <th scope="col">{{ $qty }}</th>
                        <th scope="col">IDR {{ number_format($order->total_price) }}</th>

                    </tbody>
                </table>
            </div>
    </div>
    @endforeach
@endsection()
