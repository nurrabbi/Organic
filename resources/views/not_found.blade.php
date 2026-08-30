@extends('layouts.organic_auth')

@section('content')
<section class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="container-lg">
        <div class="empty-state text-center">
            <div class="display-1 fw-bold text-primary">404</div>
            <h2 class="display-6 mt-2">Oops! Page not found</h2>
            <p class="lead text-secondary">
                The page you are looking for does not exist or may have moved.
            </p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="{{ route('home') }}" class="btn btn-primary rounded-pill px-4">Back to Home</a>
                <a href="{{ url('/') }}" class="btn btn-outline-dark rounded-pill px-4">Continue Shopping</a>
            </div>
        </div>
    </div>
</section>
@endsection
