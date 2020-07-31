<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    @include('partials.header')

    <main class="@yield('classe-main')">
      @yield('main')
      @yield('prenota')
    </main>


    @include('partials.footer')

    <script src="{{ asset('js/app.js')}}"></script>
  </body>
</html>
