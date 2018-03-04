<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Eric ku">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }} | {{ config('app.subtitle') }}</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/front/css/custom.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/back/images/favicon.png" />
        <!-- Font Icons styles for this Design -->
        <link href="assets/front/css/flaticon.css" rel="stylesheet">
        <link href="assets/front/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/front/css/themify-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/back/node_modules/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/back/node_modules/mdi/css/materialdesignicons.min.css">
        <!-- Swiftrend plugins  -->
        <link rel="stylesheet" href="assets/back/node_modules/select2/dist/css/select2.min.css" />
        
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light topbar">
          <div class="container">
            <div class="col-md-3">
                <a class="navbar-brand" href="./">Swiftrend</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-md-5 search-bar">
                <div class="input-group">
                    <div class="input-group-btn search-panel">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span id="search_concept">All Categories</span> 
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li class="dropdown-list-item">
                            <a href="#mens">Mens</a>
                          </li>
                          <li class="dropdown-list-item">
                            <a href="#womens">Womens</a>
                          </li>
                          <li class="dropdown-list-item">
                            <a href="#kids">Kids</a>
                          </li>
                          <li class="divider"></li>
                          <li class="dropdown-list-item">
                            <a href="#accessories">Made in Africa</a>
                          </li>
                        </ul>
                    </div>
                    <input type="text" class="form-control search-input" name="searchKey" placeholder="Search term...">
                    <span class="input-group-btn">
                        <button class="btn btn-default submit" type="button"><span class="ti ti-search"></span></button>
                    </span>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
              </ul>
              <!-- Right Side Of Navbar -->
               <ul class="nav navbar-nav navbar-right top-links">
                    @if (Auth::guest())
                        <li class="nav-item">
                            <a class="nav-link" href="./login">Login  <span class="ti ti-lock"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./register">Register <span class="ti ti-pencil"></span></a>
                        </li>
                    @else
                        <li class="profile-list">
                            <img data-name="{{Auth::user()->fname}}" class="profile" alt="...">
                        </li>
                        <li class="dropdown side-panel">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                Hi {{ Auth::user()->fname }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="drop-list">
                                    <span class="arrow top"></span>
                                    <a href="#">Profile</a>
                                </li>
                                <li class="drop-list">
                                    <a href="#">Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li class="drop-list">
                                    <a href="logout">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="cart-panel pull-right">
                <a class="ti ti-shopping-cart"></a>
                <span class="badge badge-danger">3</span>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark bg-faded menu-bar">
            <div class="container">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="/">Home
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./mens">Mens</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./womens">Womens</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./kids">Kids</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown">Made in Africa
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-list-item">
                            <a href="./MadeinAfrica/Rwanda">
                                <i class="dropdown-icon flag-icon flag-icon-rw"></i> &nbsp;Made in Rwanda
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-list-item">
                            <a href="./MadeinAfrica/Ghana">
                                <i class="dropdown-icon flag-icon flag-icon-gh"></i> &nbsp;Made in Ghana
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-list-item">
                            <a href="./MadeinAfrica/Kenya">
                                <i class="dropdown-icon flag-icon flag-icon-ke"></i> &nbsp;Made in Kenya
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-list-item">
                            <a href="./MadeinAfrica/Nigeria">
                                <i class="dropdown-icon flag-icon flag-icon-ng"></i> &nbsp;Made in Nigeria
                            </a>
                        </li>
                    </ul>
                    </li>
                </ul>
              </div>
              <div class="pull-right">
                <strong class="hashtag">#Swiftrend</strong>
              </div>
            </div>
        </nav>