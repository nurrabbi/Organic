@extends('layouts.organic_auth')

@section('content')
    <section class="auth-shell py-5 py-lg-6">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-7 col-xl-6">
                    <div class="auth-card soft-card"
                        style=" transform: scale(0.8); transform-origin: center; border: 3px solid #eee; border-radius: 10px;">
                        <div class="text-center mb-4">
                            <a href="{{ url('/') }}">
                                <div class="section-kicker mb-2">
                                    <img src="{{ asset('frontend/images/logo.svg') }}" alt="Organic e-commerce"
                                        class="logo">
                                </div>
                            </a>
                            <h1 class="display-6 mb-2">Create Your Account</h1>
                            <p class="text-secondary mb-0">Join Organic and keep your shopping experience in one place.
                            </p>
                        </div>
                        <form method="POST" action="{{ route('register') }}" id="register-form" class="auth-form">
                            @csrf
                            <label class="form-label mt-2" for="register-name">{{ __('Full Name') }}</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="register-name"
                                name="name" type="text" placeholder="Your full name" value="{{ old('name') }}"
                                required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="form-label mt-3" for="register-email">{{ __('Email Address') }}</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="register-email"
                                name="email" type="email" placeholder="you@example.com" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label class="form-label mt-3">Contact No.</label>
                            <div class="row g-2">
                                <div class="col-4 col-sm-3">
                                    <select class="form-select" id="country-code" name="country_code"
                                        aria-label="Country code">
                                        <option value="+880" selected>+880</option>
                                        <option value="+91">+91</option>
                                        <option value="+92">+92</option>
                                        <option value="+1">+1</option>
                                        <option value="+44">+44</option>
                                    </select>
                                </div>
                                <div class="col-8 col-sm-9">
                                    <input class="form-control @error('phone') is-invalid @enderror" id="register-phone"
                                        name="phone" type="tel" placeholder="1XXXXXXXXX" value="{{ old('phone') }}"
                                        required autocomplete="Phone" autofocus>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <label class="form-label mt-3" for="register-password">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input class="form-control @error('password') is-invalid @enderror" id="register-password"
                                    name="password" type="password" placeholder="Create a password" required
                                    autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button class="btn btn-outline-primary password-toggle" type="button"
                                    data-password-target="#register-password" aria-label="Show password">
                                    <!-- Eye Off / Hide -->
                                    <svg class="password-icon password-icon-hide d-none" viewBox="0 0 24 24" width="20"
                                        height="20" fill="none" aria-hidden="true">
                                        <path d="M3 3l18 18" stroke="currentColor" stroke-width="1.7"
                                            stroke-linecap="round" />
                                        <path d="M10.58 10.58a2 2 0 0 0 2.83 2.83" stroke="currentColor" stroke-width="1.7"
                                            stroke-linecap="round" />
                                        <path
                                            d="M9.88 5.9A9.7 9.7 0 0 1 12 5.75c6.25 0 9.75 6.25 9.75 6.25a17.7 17.7 0 0 1-3.1 3.72"
                                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.4 7.08C3.75 8.78 2.25 12 2.25 12s3.5 6.25 9.75 6.25c1.35 0 2.58-.25 3.68-.68"
                                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <!-- Eye / Show -->
                                    <svg class="password-icon password-icon-show" viewBox="0 0 24 24" width="20"
                                        height="20" fill="none" aria-hidden="true">
                                        <path
                                            d="M2.25 12s3.5-6.25 9.75-6.25S21.75 12 21.75 12 18.25 18.25 12 18.25 2.25 12 2.25 12Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <circle cx="12" cy="12" r="2.75" stroke="currentColor"
                                            stroke-width="1.7" />
                                    </svg>
                                </button>
                            </div>

                            <label class="form-label mt-3"
                                for="register-confirm-password">{{ __('Confirm Password') }}</label>
                            <div class="input-group">
                                <input class="form-control" id="register-confirm-password" name="password_confirmation"
                                    type="password" placeholder="Confirm your password" required
                                    autocomplete="new-password">
                                <button class="btn btn-outline-primary password-toggle" type="button"
                                    data-password-target="#register-confirm-password" aria-label="Show password">
                                    <!-- Eye Off / Hide -->
                                    <svg class="password-icon password-icon-hide d-none" viewBox="0 0 24 24"
                                        width="20" height="20" fill="none" aria-hidden="true">
                                        <path d="M3 3l18 18" stroke="currentColor" stroke-width="1.7"
                                            stroke-linecap="round" />
                                        <path d="M10.58 10.58a2 2 0 0 0 2.83 2.83" stroke="currentColor"
                                            stroke-width="1.7" stroke-linecap="round" />
                                        <path
                                            d="M9.88 5.9A9.7 9.7 0 0 1 12 5.75c6.25 0 9.75 6.25 9.75 6.25a17.7 17.7 0 0 1-3.1 3.72"
                                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6.4 7.08C3.75 8.78 2.25 12 2.25 12s3.5 6.25 9.75 6.25c1.35 0 2.58-.25 3.68-.68"
                                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <!-- Eye / Show -->
                                    <svg class="password-icon password-icon-show" viewBox="0 0 24 24" width="20"
                                        height="20" fill="none" aria-hidden="true">
                                        <path
                                            d="M2.25 12s3.5-6.25 9.75-6.25S21.75 12 21.75 12 18.25 18.25 12 18.25 2.25 12 2.25 12Z"
                                            stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <circle cx="12" cy="12" r="2.75" stroke="currentColor"
                                            stroke-width="1.7" />
                                    </svg>
                                </button>
                            </div>
                            <div id="register-password-message" class="small mt-2 text-secondary">
                                {{ __('Use the same password in both fields.') }}
                            </div>

                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" value="1" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    {{ __('I agree to the Terms, Conditions and Privacy Policy.') }}
                                </label>
                            </div>

                            <button class="btn btn-primary w-100 rounded-pill mt-4 py-3" type="submit">
                                {{ __('Create Account') }}</button>
                        </form>

                        <div class="text-center mt-4 pt-3 border-top">
                            <p class="mb-0 text-secondary">{{ __('Already have an account?') }}</p>
                            <a href="{{ route('login') }}"
                                class="btn btn-outline-success rounded-pill px-4 mt-2">{{ __('Login') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
