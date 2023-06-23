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
                        <span class="title-text">{{ __('Log In') }}</span>
                    </div>
                    <p class="card-text">
                        Create account to Capture the full potential of your website with our tailored solution, optimized for seamless browsing across all browsers
                    </p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="email" placeholder="Username"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              <label for="email">Email</label>
                            </div>
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-4">
                            <div class="form-floating">
                              <input type="text" class="form-control" id="password" placeholder="Password"  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                              <label for="password">Password</label>
                            </div>
                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row mb-0">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-submit">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                <div class="col-md-12">
                                    Don't have an account?
                                    <a class="btn btn-link btn-switch"href="{{ route('register') }}">
                                        {{ __('Go to Sign Up') }}
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
