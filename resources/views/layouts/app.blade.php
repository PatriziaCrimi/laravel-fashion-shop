<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('page-title')Fashion Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
