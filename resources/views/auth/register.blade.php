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
   <link rel="stylesheet" href="./assets/back/node_modules/telinput/css/intlTelInput.css" />
   
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./assets/back/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./assets/back/images/favicon.png" />
  <style type="text/css">
      #phone{
            padding-left: 50px;
      }
  </style>
</head>
<body>
    <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="bg-white col-lg-8 offset-md-2">
                  <div class="auth-form-light text-left p-5">
                    <a href="./">
                      <h2 class="text-primary text-center">Swiftrend</h2>
                    </a>
                    <h4 class="font-weight-light text-center">
                      Hello! let's get started
                    </h4>
                    <form class="pt-5" action="{{ url('/register') }}" method="post">
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
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" class="form-control" name="fname" value="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input type="text" class="form-control" name="lname" value="">
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control" name="email" value="">
                                <i class="fa fa-envelope-o"></i>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                <label class="control-label">Phone</label>
                                <input id="phone" type="tel" class="form-control input-lg text-left" name="phone"  required="">
                                <i class="fa fa-phone"></i>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class=" control-label">Password</label>
                                <input id="password-field" type="password" class="form-control" name="password">
                                <i toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></i>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label class=" control-label">Confirm Password</label>
                                <input id="password-field1" type="password" class="form-control" name="password">
                                <i toggle="#password-field1" class="fa fa-fw fa-eye field-icon toggle-password1"></i>
                            </div>
                          </div>
                      </div>
                      <div class="mt-3">
                        <div class="form-check form-check-flat">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                I accept terms and conditions
                                <i class="input-helper"></i>
                            </label>
                        </div>
                      </div>
                      <div class="mt-3">
                        <button class="btn btn-block btn-primary btn-lg font-weight-medium" type="submit">Register</button>
                      </div>
                      
                      <div class="mt-4 text-center">
                        <p>Already have an account?<a href="/login" class="auth-link text-black">
                        &nbsp;&nbsp; Sign in ?</a></p> 
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
  <script src="./assets/back/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./assets/back/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="./assets/back/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="./assets/back/node_modules/telinput/js/intlTelInput.js"></script>
  <script>
    var input = $("#phone"),
      output = $("#output");

    input.intlTelInput({
      nationalMode: true,
      utilsScript: "./assets/back/node_modules/telinput/js/utils.js" // just for formatting/placeholders etc
    });

    // listen to "keyup", but also "change" to update when the user selects a country
    input.on("keyup change", function() {
      var intlNumber = input.intlTelInput("getNumber");
      if (intlNumber) {
        output.text("International: " + intlNumber);
      } else {
        output.text("Please enter a number below");
      }
    });
</script>
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
  <script type="text/javascript">
    $(".toggle-password1").click(function() {
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
