@extends('layouts.organic_auth')

@section('content')
    <section class="auth-shell py-5 py-lg-6">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="auth-card soft-card" style=" transform: scale(0.8); transform-origin: center;">
                        <div class="text-center mb-4">
                            <a href="{{ url('/') }}">
                                <div class="section-kicker mb-2">
                                    <img src="{{ asset('frontend/images/logo.svg') }}" alt="Organic e-commerce"
                                        class="logo">
                                </div>
                            </a>
                            <h1 class="display-6 mb-2">Welcome Back</h1>
                            <p class="text-secondary mb-0">Log in to manage your orders, profile and rewards.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}" id="login-form" class="auth-form">
                            @csrf
                            <label class="form-label mt-3" for="login-email">{{ __('E-Mail Address') }}</label>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="login-email"
                                name="email" type="email" placeholder="you@example.com" value="{{ old('email') }}"
                                required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            @if (Route::has('password.request'))
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <label class="form-label mb-0" for="login-password">{{ __('Password') }}</label>
                                    <a href="{{ route('password.request') }}"
                                        class="small">{{ __('Forgot Password?') }}</a>
                                </div>
                            @endif
                            <div class="input-group mt-1">
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    id="login-password" name="password" type="password" placeholder="Enter your password"
                                    required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <button class="btn btn-outline-primary password-toggle" type="button"
                                    data-password-target="#login-password" aria-label="Show password" title="Show password">
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
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="1" id="remember-me"
                                    name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember-me">{{ __('Remember Me') }}</label>
                            </div>
                            <button class="btn btn-primary w-100 rounded-pill mt-4 py-3"
                                type="submit">{{ __('Login') }}</button>
                        </form>

                        <div class="auth-divider my-4"><span>or continue with</span></div>
                        <div class="d-flex justify-content-center gap-3">
                            <button class="auth-provider auth-provider-google" type="button" data-auth-provider="Google"
                                title="Continue with Google" aria-label="Continue with Google">
                                <span aria-hidden="true">G</span>
                            </button>
                            <button class="auth-provider auth-provider-email" type="button" data-auth-provider="email"
                                title="Continue with Email" aria-label="Continue with Email">
                                <svg viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M3.5 5.5h17v13h-17z" fill="none" stroke="currentColor"
                                        stroke-width="1.8" />
                                    <path d="m4 7 8 6 8-6" fill="none" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button class="auth-provider auth-provider-facebook" type="button"
                                data-auth-provider="Facebook" title="Continue with Facebook"
                                aria-label="Continue with Facebook">
                                <span aria-hidden="true">f</span>
                            </button>
                        </div>
                        @if (Route::has('register'))
                            <div class="text-center mt-4 pt-3 border-top">

                                <p class="mb-0 text-secondary">{{ __('Don\'t have an account?') }}</p>
                                <a href="{{ route('register') }}"
                                    class="btn btn-outline-primary rounded-pill px-4 mt-2">
                                    {{ __('Create an Account') }}</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
