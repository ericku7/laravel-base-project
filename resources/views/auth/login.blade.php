<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="Author" content="Eric ku">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }} | {{ config('app.subtitle') }}</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./assets/back/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./assets/back/node_modules/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="./assets/back/node_modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="./assets/back/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css">
   <link rel="stylesheet" href="./assets/back/node_modules/font-awesome/css/font-awesome.min.css" />

  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/back/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./assets/back/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="bg-white col-lg-6 offset-md-3">
                  <div class="auth-form-light text-left p-5">
                    <a href="./">
                      <h2 class="text-primary text-center">Swiftrend</h2>
                    </a>
                    <h4 class="font-weight-light text-center">
                      Hello! let's get started
                    </h4>
                    <form class="pt-5" action="{{ url('/login') }}" method="post">
                      @if (count($errors) > 0)
                      <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Whoops!</strong>
                              @foreach ($errors->all() as $error)
                                  {{ $error }}
                              @endforeach
                      </div>
                    @endif
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control" name="email" value="">
                        <i class="fa fa-user"></i>
                      </div>
                      <div class="form-group">
                        <label class=" control-label">Password</label>
                        <input id="password-field" type="password" class="form-control" name="password">
                        <i toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></i>
                      </div>
                      <div class="mt-5">
                        <button class="btn btn-block btn-primary btn-lg font-weight-medium" type="submit">Login</button>
                      </div>
                      <div class="mt-3 float-left">
                        <a href="#" class="auth-link text-black">Forgot password?</a>
                      </div>
                      <div class="mt-3 float-right">
                        <p>No Account<a href="/register" class="auth-link text-black">
                        &nbsp;&nbsp; Sign up ?</a></p> 
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./assets/back/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./assets/back/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="./assets/back/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- endinject -->
  <script type="text/javascript">
    $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
  </script>
</body>

</html>