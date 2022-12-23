@extends('layouts.apps')

@section('content')

    <body>

        <div class="login-form">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-4" style="margin-top: 150px;">
                        <div class="card margin-top">
                            <h4 class="card-header text-center">Login</h4>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group mb-3">

                                        <input type="email" placeholder="Enter Your Email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="password" placeholder="Enter Your Password" id="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-grid mx-auto w-25">
                                        <button type="submit" class="btn btn-dark btn-block">Login</button>
                                    </div>
                                    <div class="form-group mb-2 mt-3">
                                        Don't have an account? <u><a href="{{ route('register') }}">Register Here</a></u>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection()
