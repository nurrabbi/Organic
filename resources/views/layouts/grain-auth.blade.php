<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('backend/graindashboard/css/graindashboard.css') }}" rel="stylesheet">
</head>

<body>
    <main class="main">

        <div class="content">
            @yield('content')
        </div>
    </main>

    <script src="{{ asset('backend/graindashboard/js/graindashboard.js') }}"></script>
    <script src="{{ asset('backend/graindashboard/js/graindashboard.vendor.js') }}"></script>
    @yield('scripts')
</body>

</html>
