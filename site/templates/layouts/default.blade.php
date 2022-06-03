<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $site->title() }} | {{ $page->title() }}</title>
    <link rel="icon" type="image/svg" sizes="32x32" href="/images/favicon.svg">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
    @yield('styles')

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body style="background-color: #{{ $page->color() }}">
  <div style="background-color: #{{ $page->color() }}">

    @include('partials.nav')


@yield('content')

<footer class="h-20"></footer>
  </div>
<script src="{{ mix('js/app.js') }}"></script>
<script src="/js/menu.js"></script>
@yield('scripts')



</body>
</html>
