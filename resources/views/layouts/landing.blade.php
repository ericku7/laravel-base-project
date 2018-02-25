@include('layouts.header')
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('assets/front/images/slide01.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="slide-title">First Slide</h3>
          <p>This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/front/images/slide02.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="slide-title">Second Slide</h3>
          <p>This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/front/images/slide03.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="slide-title">Third Slide</h3>
          <p>This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="icon ti ti-arrow-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="icon ti ti-arrow-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="page-content">
    <div class="container">
      <h2 class="row-title text-center">New Arrivals</h2>
      <div class="row">
        <div class="col-md-3">
          1 of 3
        </div>
        <div class="col-md-3">
          1 of 3
        </div>
        <div class="col-md-3">
          1 of 3
        </div>
        <div class="col-md-3">
          1 of 3
        </div>
      </div>
    </div>
  </div>
@extends('layouts.footer')