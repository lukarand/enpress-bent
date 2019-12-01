@php
  $path = Request::path();
@endphp
<div class="site-header">
  <nav class="navbar-main navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('/dist/media/logos/logo-bent.png') }}" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbar_main">
      <ul class="navbar-nav mx-auto mt-8 mt-lg-0">
        <li @if (strrpos($path, '/') === 0) class="nav-item active" @endif>
          <a class="nav-link" href="{{ url('/') }}">Home</a>
        </li>
        <li @if (strrpos($path, 'about') === 0) class="nav-item active" @endif>
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li @if (strrpos($path, 'products') === 0) class="nav-item active dropdown" @endif>
          <a class="nav-link" href="{{ url('/products') }}">Product Range</a>
        </li>
        <li @if (strrpos($path, 'project') === 0) class="nav-item active" @endif>
          <a class="nav-link" href="{{ url('/project') }}">Projects</a>
        </li>
        <li @if (strrpos($path, 'contact') === 0) class="nav-item active" @endif>
          <a class="nav-link" href="{{ url('/#contact') }}">Contact</a>
        </li>
      </ul>
      <a href="{{ url('#contact') }}" class="btn btn-primary navbar-quote">Get a quote</a>
    </div>
  </nav>
</div>