@extends('layouts.apps')
@section('content')
    <div class="signup-form">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-5" style="margin-top: 50px; margin-bottom: auto;">
                    <div class="card">
                        <h4 class="card-header text-center">Register</h4>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                {{-- Name --}}
                                <div class="form-group mb-3">
                                    <label for="name" class="mb-2"> Name </label>
                                    <input type="text" placeholder="Enter Your Name" id="name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- Email --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Email </label>
                                    <input type="email" placeholder="Enter Your Email" id="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- Password --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Password </label>
                                    <input type="password" placeholder="Enter Your Password" id="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    {{-- Confirm Password --}}
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Confirm Password </label>
                                    <input type="password" placeholder="Confirm Your Password" id="password-confirm"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                                {{-- Gender --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Gender </label><br>
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label for="male">Male</label><br>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label for="female">Female</label><br>
                                    <span class="text-danger"></span>
                                </div>
                                {{-- Date of birth --}}
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Date of Birth </label>
                                    <input value="{{ old('date_of_birth', date('mm/dd/yyyy')) }}" type="date"
                                        class="form-control" name="date_of_birth" value="date_of_birth" id="date_of_birth">
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2"> Country </label>
                                    <select class="form-select form-select-sm" name="country_id" id="country_id">
                                        <option selected hidden disabled value="">Choose a country</option>
                                        <option value="" selected>
                                        </option>
                                        <option value=""></option>
                                    </select>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Register</button>
                                </div>
                                <div class="form-group mb-2 mt-3">
                                    Have an account? <u><a href="{{ route('login') }}">Login Here</a></u>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
