@extends('layouts.apps')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/' . $data->image) }}" alt="..." style="width: 100%;">
                            </div>
                            <div class="col-md-6 mt-2">
                                <h2>{{ $data->product_name }}</h2>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Detail</td>
                                            <td>:</td>
                                            <td>{{ $data->detail }}</td>
                                        </tr>
                                        <tr>
                                            <td>Price</td>
                                            <td>:</td>
                                            <td>IDR {{ number_format($data->price) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
