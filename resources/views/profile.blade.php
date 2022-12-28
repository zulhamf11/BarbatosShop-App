@extends('layouts.apps')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-4 mt-5 mb-5">
                <div class="card">
                    <h4 class="card-header text-center">Profile</h4>
                    @foreach ($data as $data)
                        <div class="card-body">


                            <div class="form-group mb-3">
                                <label class="mb-2"> Name </label>
                                <div class="value-col">
                                    {{ $data->name }}
                                </div>

                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2"> Email </label>
                                <div class="value-col">
                                    {{ $data->email }}
                                </div>

                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2"> Gender </label>
                                <div class="value-col">
                                    {{ $data->gender }}
                                </div>

                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2"> Date of Birth </label>
                                <div class="value-col">
                                    {{ $data->date_of_birth }}
                                </div>

                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-2"> Country </label>
                                <div class="value-col">
                                    {{ $data->country }}
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
