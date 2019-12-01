@extends('layouts.app')
@section ('content')
  <div class="section section-product-hero d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('/dist/media/heros/product-hero.jpg') }}')">
    <img class="product-hero-title px-3" src="{{ asset('/dist/media/heros/other-hero-title.png') }}"/>
  </div>
  @include('sections.product-introduction')
  @include('sections.product-content')
  @include('sections.contact')
@endsection