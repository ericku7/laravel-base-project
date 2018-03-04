<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Eric ku">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }} | {{ config('app.subtitle') }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/back/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/back/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="./assets/back/node_modules/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./assets/back/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./assets/back/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="./assets/back/node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="./assets/back/node_modules/jquery-bar-rating/dist/themes/fontawesome-stars.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/back/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./assets/back/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
      @include('layouts.Admin_navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        @include('layouts.Admin_sidebar')
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="icon icon-social-dropbox icon-lg text-primary"></i>
                    <div class="ml-3">
                      <p class="mb-0">All Products</p>
                      <h6>2346</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="ti ti-truck icon-lg text-primary"></i>
                    <div class="ml-3">
                      <p class="mb-0">Total Orders</p>
                      <h6>12569</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="icon icon-docs icon-lg text-primary"></i>
                    <div class="ml-3">
                      <p class="mb-0">Instock Value</p>
                      <h6>$ 3000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="icon icon-wallet icon-lg text-primary"></i>
                    <div class="ml-3">
                      <p class="mb-0">Total Profit</p>
                      <h6>$ 5600</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-lg-5 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Daily Sales</h6>
                  <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-between text-center">
                      <div class="wrapper">
                        <h4>$2256</h4>
                        <small class="text-muted">Totel sales</small>
                      </div>
                      <div class="wrapper">
                        <h4>584</h4>
                        <small class="text-muted">Compaign</small>
                      </div>
                    </div>
                    <div id="dashboard-donut-chart" style="height:250px"></div>
                  </div>
                  <div id="legend" class="donut-legend"></div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Total Revenue</h6>
                  <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-between text-center mb-5">
                      <div class="wrapper">
                        <h4>6,256</h4>
                        <small class="text-muted">Totel sales</small>
                      </div>
                      <div class="wrapper">
                        <h4>8569</h4>
                        <small class="text-muted">Open Compaign</small>
                      </div>
                    </div>
                  </div>
                  <div id="morris-line-example" style="height:250px;"></div>
                  <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-between text-center mt-5">
                      <div class="wrapper">
                        <h4>5136</h4>
                        <small class="text-muted">Online Sales</small>
                      </div>
                      <div class="wrapper">
                        <h4>4596</h4>
                        <small class="text-muted">Store Sales</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center">Copyright © <?php echo date("Y"); ?> <a href="https://www.swiftrendrend.com">Swiftrend</a>. All rights reserved.</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- row-offcanvas ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="./assets/back/node_modules/jquery/dist/jquery.min.js"></script>
<script src="./assets/back/node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="./assets/back/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./assets/back/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="./assets/back/node_modules/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="./assets/back/node_modules/chart.js/dist/Chart.min.js"></script>
<script src="./assets/back/node_modules/raphael/raphael.min.js"></script>
<script src="./assets/back/node_modules/morris.js/morris.min.js"></script>
<script src="./assets/back/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="./assets/back/js/off-canvas.js"></script>
<script src="./assets/back/js/hoverable-collapse.js"></script>
<script src="./assets/back/js/misc.js"></script>
<script src="./assets/back/js/settings.js"></script>
<script src="./assets/back/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="./assets/back/js/dashboard.js"></script>
<script src="./assets/back/js/letter_initial.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('.profile').initial({width:40,height:40});
  })
</script>
<script type="text/javascript">
  $(document).ready(function() {
      $(".nav li a").each(function() {
          if (this.href == window.location.href) {
              $(this).addClass("active");
              $(this).parent().addClass("active"); // add active to li of the current link
              $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
              $(this).parent().parent().prev().click(); // click the item to make it drop
          }
      });
  });
  // NAVIGATION HIGHLIGHT & OPEN PARENT
  $(".nav ul li a.active").parents("li:last").children("a:first").addClass("active").trigger("click");
</script>

</body>
</html>