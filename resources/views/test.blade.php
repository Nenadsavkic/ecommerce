@extends('layouts.main')

@section('title', 'Test Carousel')

@section('content')
  <style>
    .carousel-item img {
      height: 500px;
      object-fit: cover;
    }
  </style>

  <div id="carouselExample" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExample" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/headshots/headshot1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/headshots/headshot2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
@endsection
