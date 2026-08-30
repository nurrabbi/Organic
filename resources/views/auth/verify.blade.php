<!DOCTYPE html>
<html lang="en">

<head>
    <title>Verify Your Email | Organic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="Organic">
    <meta name="keywords" content="organic grocery, email verification, e-commerce">
    <meta name="description" content="Verify your email address for your Organic account.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/vendor.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/style.css">

    <style>

    </style>
</head>

<body class="verify-page">
    <main class="verify-shell">
        <section class="verify-visual" aria-label="Organic account verification illustration">
            <a class="verify-brand" href="{{ url('/') }}" aria-label="Organic home">
                <img src="{{ asset('frontend') }}/images/logo.svg" alt="Organic">
            </a>

            <div class="verify-visual-inner">
                <img class="verify-illustration" src="{{ asset('frontend') }}/images/verify-image.png"
                    alt="Organic customer using an account service">
            </div>

            <div class="verify-caption">
                <strong>Fresh products. Simple account. Better shopping.</strong>
                <p>Verify your email to keep your Organic account secure and connected to your orders.</p>
            </div>
        </section>

        <section class="verify-content" aria-labelledby="verify-title">
            <div class="verify-card">
                <div class="verify-kicker"><span class="dot"></span> Account security</div>

                <h1 id="verify-title" class="verify-title">Verify your email</h1>
                <p class="verify-lead">
                    We sent an activation link to your email address. Please follow the link in the message to
                    continue.
                </p>

                <div class="verify-email-box">
                    <div class="verify-email-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M3.5 5.5h17v13h-17z" stroke="currentColor" stroke-width="1.7" />
                            <path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div>
                        <div class="verify-email-label">Activation link sent to</div>
                        <div class="verify-email-value" id="verify-email">{{ Auth::user()->email }}</div>
                    </div>
                </div>
                <a href="https://mailtrap.io/sandboxes/4779982/settings">
                    <button class="verify-btn" type="button" id="skip-verification">Click to verify</button>
                </a>
                <a class="btn verify-secondary" href="{{ route('login') }}">Back to Login</a>

                <div class="verify-resend">
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        {{ 'Didn\'t get the mail?' }}
                        <button type="submit" id="resend-verification">{{ __('Resend') }}</button>
                    </form>
                </div>

                <p class="verify-note">
                    You can change your account email later from <a href="">My Account</a>.
                </p>
            </div>
        </section>
    </main>

    <div class="verify-toast" id="verify-toast" role="status" aria-live="polite"></div>

    <script>
        (function() {
            const toast = document.getElementById('verify-toast');
            const skip = document.getElementById('skip-verification');
            const resend = document.getElementById('resend-verification');

            function showToast(message) {
                toast.textContent = message;
                toast.classList.add('is-visible');
                window.clearTimeout(showToast.timer);
                showToast.timer = window.setTimeout(function() {
                    toast.classList.remove('is-visible');
                }, 2600);
            }

            skip.addEventListener('click', function() {
                window.location.href = 'my-account.html';
            });

            resend.addEventListener('click', function() {
                showToast('A new verification link has been requested.');
            });
        }());
    </script>
</body>

</html>
