@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @if ($favorites->isEmpty())
                <div class="col-md-8 mt-5">
                    <div class="card text-center bg-warning-subtle">
                        <div class="card-body">
                            <i class="bi bi-emoji-frown-fill display-4 text-muted"></i>
                            <h5 class="card-title mt-3">No saved browsers</h5>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-12 col-lg-8 row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($favorites as $favorite)
                        <div class="col">
                            <div class="card browser-block h-100">
                                <img 
                                    class="card-img-top" 
                                    src="{{ asset('assets/' . $favorite->browser->photo) }}"
                                    alt="{{ $favorite->browser->name }}">
                                <div class="card-body">
                                    <a
                                        class="link-underline link-dark link-underline-opacity-0" 
                                        href="{{ route('browser', ['id' => $favorite->browser->id]) }}">
                                        <h5 class="card-title">{{ $favorite->browser->name }}</h5>
                                        <p class="card-text">{{ $favorite->browser->information }}</p>
                                    </a>
                                </div>
                    
                                @if (Auth::check())
                                    <form
                                        class="d-flex justify-content-end"
                                        action="{{ route('favorites.removeFromFavorites', $favorite->browser) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn text-danger" type="submit">
                                            <small>
                                                <i class="bi bi-trash me-1"></i>
                                                Remove
                                            </small>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
