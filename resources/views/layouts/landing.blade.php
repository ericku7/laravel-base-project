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
          <p class="caption-text">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/front/images/slide02.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="slide-title">Second Slide</h3>
          <p class="caption-text">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('assets/front/images/slide03.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="slide-title">Third Slide</h3>
          <p class="caption-text">This is a description for the third slide.</p>
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
      <div class="row new-arrivals">
        <div class="col-md-3 no-padding product-grid">
          <img src="./assets/back/images/products/product01" class="img-fluid">
          <div class="product-caption">
             <h3 class="product-name">Leather Bag</h3>
             <h4 class="product-price">$ 25.99</h4>
          </div>
        </div>
        <div class="col-md-3 no-padding product-grid">
          <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
          <div class="product-caption">
             <h3 class="product-name">Nike Sport shoes</h3>
             <h4 class="product-price">$ 25.99</h4>
          </div>
        </div>
        <div class="col-md-3 no-padding product-grid">
          <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
          <div class="product-caption">
             <h3 class="product-name">Classic Bag</h3>
             <h4 class="product-price">$ 25.99</h4>
          </div>
        </div>
        <div class="col-md-3 no-padding product-grid">
          <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
          <div class="product-caption">
             <h3 class="product-name">Women top</h3>
             <h4 class="product-price">$ 25.99</h4>
          </div>
        </div>
      </div>
      <div class="row seasonal-listing">
        <div class="col-md-7 left-branding">
          <div class="row">
            <div class="col-md-5 left-col-branding">
              <span class="number-marker">01</span>
              <p class="sub-section-title">
                <strong>This</strong><br>
                <strong>Season's</strong><br>
                <strong>Must - Have</strong>
              </p>
              <button class="btn btn-primary btn-left-custom">
                Shop Now <i class="ti ti-arrow-right"></i>
              </button>
            </div>
            <div class="col-md-7 right-col-brading">
              <div id="product-indicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators carousel-indicators-brand">
                  <li data-target="#product-indicators" data-slide-to="0" class="active"></li>
                  <li data-target="#product-indicators" data-slide-to="1"></li>
                  <li data-target="#product-indicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                  <!-- Slide One - Set the background image for this slide in the line below -->
                  <div class="carousel-item carousel-item-branding  active">
                    <img src="./assets/back/images/products/product04.jpg" class="img-slide img-fluid">
                    <div class="carousel-custom-caption d-none d-md-block">
                      <h3 class="slide-title">Winter Jacket</h3>
                      <p class="caption-text">$ 25.99</p>
                    </div>
                  </div>
                  <!-- Slide Two - Set the background image for this slide in the line below -->
                  <div class="carousel-item carousel-item-branding ">
                    <img src="./assets/back/images/products/product04.jpg" class="img-slide img-fluid">
                    <div class="carousel-custom-caption d-none d-md-block">
                      <h3 class="slide-title">Rain seasonal</h3>
                      <p class="caption-text">$ 25.99</p>
                    </div>
                  </div>
                  <!-- Slide Three - Set the background image for this slide in the line below -->
                  <div class="carousel-item carousel-item-branding ">
                    <img src="./assets/back/images/products/product04.jpg" class="img-slide img-fluid">
                    <div class="carousel-custom-caption d-none d-md-block">
                      <h3 class="slide-title">hoddies</h3>
                      <p class="caption-text">$ 25.99</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#product-indicators" role="button" data-slide="prev">
                  <span class="icon ti ti-arrow-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#product-indicators" role="button" data-slide="next">
                  <span class="icon ti ti-arrow-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 right-branding">
          <div class="row">
            <div class="col-md-5 left-col-branding">
              <span class="number-marker right-marker">02</span>
              <p class="sub-section-title right-sub">
                <strong>New</strong><br>
                <strong>Womens</strong><br>
                <strong>Arrivals</strong>
              </p>
              <button class="btn btn-primary btn-right-custom">
                Discover More <i class="ti ti-arrow-right"></i>
              </button>
            </div>
            <div class="col-md-7">
                <img src="./assets/back/images/products/product06.jpg" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      <div class="row new-arrivals">
        <div class="col-md-3 no-padding product-grid">
          <img src="./assets/back/images/products/product01" class="img-fluid">
          <div class="product-caption">
             <h3 class="product-name">Leather Bag</h3>
             <h4 class="product-price">$ 25.99</h4>
          </div>
        </div>
        <div class="col-md-3 no-padding product-grid">
          <img src="./assets/back/images/products/product02.jpg" class="img-fluid">
          <div class="product-caption">
             <h3 class="product-name">Nike Sport shoes</h3>
             <h4 class="product-price">$ 25.99</h4>
          </div>
        </div>
        <div class="col-md-3 no-padding product-grid">
          <img src="./assets/back/images/products/product03.jpg" class="img-fluid">
          <div class="product-caption">
             <h3 class="product-name">Classic Bag</h3>
             <h4 class="product-price">$ 25.99</h4>
          </div>
        </div>
        <div class="col-md-3 no-padding product-grid">
          <img src="./assets/back/images/products/product05.jpg" class="img-fluid">
          <div class="product-caption">
             <h3 class="product-name">Women top</h3>
             <h4 class="product-price">$ 25.99</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
@extends('layouts.footer')