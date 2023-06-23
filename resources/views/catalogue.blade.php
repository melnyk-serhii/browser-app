@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-8 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($browsers as $browser)
                <div class="col">
                    <div class="card browser-block h-100">
                        <img 
                            class="card-img-top" 
                            src="{{ asset('assets/' . $browser->photo) }}" 
                            alt="{{ $browser->name }}">
                        <div class="card-body">
                            <a
                                class="link-underline link-dark link-underline-opacity-0" 
                                href="{{ route('browser', ['id' => $browser->id]) }}">
                                <h5 class="card-title">{{ $browser->name }}</h5>
                                <p class="card-text">{{ $browser->information }}</p>
                            </a>
                        </div>
            
                        @if (Auth::check())
                            <form
                                class="d-flex justify-content-end"
                                action="{{ route('catalogue.addToFavorites', $browser) }}" 
                                method="POST">
                                @csrf
                                <button class="btn text-body-secondary" type="submit">
                                    <small>
                                        <i class="bi {{ in_array($browser->id, $favoriteBrowsers) ? 'bi-heart-fill' : 'bi-heart' }} me-1"></i>
                                        {{ in_array($browser->id, $favoriteBrowsers) ? 'Added to Favorites' : 'Add to Favorites' }}
                                    </small>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
