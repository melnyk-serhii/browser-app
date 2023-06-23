@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="top-block container-fluid text-center">
            <h1 class="top-header">
                Unlock the full potential of your website with our browser-focused design and development expertise
            </h1>
            <a class="btn btn-primary get-started-btn" href="{{ route('login') }}">{{ __('Get Started') }}</a>
        </div>
        <div class="bottom-block container-fluid text-center">
            <img src="/assets/chrome-logo.png" class="chrome-logo">
            <h2 class="welcome-description">
                Unlock the full potential of your website with our tailored solution, ensuring seamless browsing experiences across all major browsers.
            </h2>
            <img src="/assets/devices.png" class="devices-img">
        </div>
    </div>
@endsection
