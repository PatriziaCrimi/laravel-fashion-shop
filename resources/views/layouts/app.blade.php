<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fashion Shop | @yield('page-title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div id="page-wrapper">
      {{-- Header --}}
      @include('partials.header')
      {{-- Main --}}
      <main>
        @yield('section')
      </main>
      {{-- Footer --}}
      @include('partials.footer')
    </div>  {{-- Closing page-wrapper --}}
  </body>
</html>
