<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">


    <link href="{{ asset('css/frontend/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend/compiled.min.css') }}" rel="stylesheet">
    
   
</head>
<body>

<section class="error-container">
    <div class="container">
        <div class="error-container__wrapper">
            <h2>@yield('message')</h2>
            <h1>@yield('title')</h1>
            <a class="go-home-btn" href="{{ route('welcome') }}">Повернутись на головну</a>
        </div>
    </div>
</section>



    
</body>
</html>