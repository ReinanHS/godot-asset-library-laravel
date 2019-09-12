<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#3d8fcc">
    <title>@yield('title') - Godot Asset Library</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ mix('js/manifest.js') }}"></script>
    <script defer src="{{ mix('js/vendor.js') }}"></script>
    <script defer src="{{ mix('js/app.js') }}"></script>
  </head>
  <body data-barba="wrapper">
    <header>
      <nav>
        <a href="{{ route('asset.index') }}">Godot Asset Library</a>
      </nav>
    </header>
    <main data-barba="container">
      @yield('content')
    </main>
  </body>
</html>