<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    @include('partials.header')

    @yield('main')

    @include('partials.footer')

    <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>
