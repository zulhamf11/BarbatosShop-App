@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @foreach ($data as $data)
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('images/' . $data->image) }}" alt="..." style="width: 100%;">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <h2>{{ $data->product_name }}</h2>
                                    <table class="table">
                                        <tbody>

                                            <tr>
                                                <td>Quantity</td>
                                                <td>:</td>
                                                <td>{{ $data->qty }}</td>
                                            </tr>

                                            <tr>
                                                <td>Total Price</td>
                                                <td>:</td>
                                                <td>
                                                    IDR {{ number_format($data->total_price) }}
                                                </td>
                                            </tr>





                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <a type="button" class="btn btn-primary mt-4" href="{{ route('summary') }}">
                        Purchase
                    </a>



                </div>
            </div>
        </div>
    </div>
@endsection
