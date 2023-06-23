@extends('layouts.app')

@section('content')
<div class="container auth-form">
    <div class="btn-back">
        <a class="btn" href="{{ url('/') }}">
            <i class="bi bi-arrow-left"></i>
            Back to the Main Page
        </a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <i class="bi bi-person-circle person-icon"></i>
                        <span class="title-text">{{ __('Sign Up') }}</span>
                    </div>
                    <p class="card-text">
                        Create account to Capture the full potential of your website with our tailored solution, optimized for seamless browsing across all browsers
                    </p>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <div class="form-floating">
                              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Username" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                              <label for="name">Username</label>
                            </div>
                            <span class="input-group-text">
                                <i class="bi bi-person-plus-fill"></i>
                            </span>
                        </div>
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        <div class="input-group mb-3">
                            <div class="form-floating">
                              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete="email">
                              <label for="email">Email</label>
                            </div>
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                        </div>
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        <div class="input-group mb-3">
                            <div class="form-floating">
                              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password" name="password" value="{{ old('password') }}" autocomplete="password">
                              <label for="password">Password</label>
                            </div>
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                        </div>
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        <div class="input-group mb-4">
                            <div class="form-floating">
                              <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirm password" name="password_confirmation" value="{{ old('password') }}">
                              <label for="password-confirm">Confirm Password</label>
                            </div>
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                        </div>
                        @error('password_confirmation')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        <div class="row mb-0">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-submit">
                                    {{ __('Register') }}
                                </button>

                                <div class="col-md-12">
                                    Already have an account?
                                    <a class="btn btn-link btn-switch"href="{{ route('login') }}">
                                        {{ __('Go to Sign In') }}
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
