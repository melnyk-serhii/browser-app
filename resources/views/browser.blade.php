@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="btn-back">
            <a class="btn" href="{{ url('/catalogue') }}">
                <i class="bi bi-arrow-left"></i>
                Back to the Catalogue
            </a>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="card mb-3 col-md-8 p-0 bg-white">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img class="card-img-top" src="{{ asset('assets/' . $browser->photo) }}" alt="{{ $browser->name }}">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title">{{ $browser->name }}</h5>
                            <p class="card-text">{{ $browser->information }}</p>
                            <p class="card-text">
                                Initial Release:
                                <span  class="text-body-secondary">{{ $browser->initial_release }} </span>
                            </p>
                            <p class="card-text">
                                Repository:
                                <a 
                                    href="{{ $browser->repository }}" 
                                    target="_blank"
                                    class="link-offset-2 link-underline-secondary">
                                    <span  class="text-body-secondary">{{ $browser->repository }} </span>
                                </a>
                            </p>
                            <p class="card-text">
                                Website:
                                <a 
                                    href="{{ $browser->website }}" 
                                    target="_blank"
                                    class="link-offset-2 link-underline-secondary">
                                    <span  class="text-body-secondary">{{ $browser->website }} </span>
                                </a>
                            </p>
                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
