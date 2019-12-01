<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! App\Assets::style('app') !!}
    <title>{{ (isset($title) ? $title . ' - ' : '') . config('app.name') }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/dist/media/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/dist/media/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/dist/media/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/dist/media/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/dist/media/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
  @include('shared.header')
  <div class="site-content">
    @yield('content')
  </div>
  @include('shared.footer')
  {!! App\Assets::script('polyfills') !!}
  {!! App\Assets::script('app') !!}
  @stack('scripts')
</body>
</html>
