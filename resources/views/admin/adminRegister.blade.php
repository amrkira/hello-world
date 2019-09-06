<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>allurui Premium Bootstrap Admin Dashboard Template</title>
  <!-- base:css -->

  <link rel="stylesheet" href="{{ asset('library/vendors/ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('library/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('library/css/horizontal-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('library/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="{{ asset('library/images/logo.svg') }}" alt="logo">
              </div>


                 @if(Session::has('flash_message_error'))
                  <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{!! session('flash_message_error') !!}</strong>
                  </div>
                  @endif  
                  @if(Session::has('flash_message_success'))
                  <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button> 
                  <strong>{!! session('flash_message_success') !!}</strong>
                  </div>
                 @endif 

              <h4>Rejestracja Administratora</h4>
              <h6 class="font-weight-light">By przejść dalej, zarejestruj głównego administratora Aplikacji</h6>
              <form class="" id="" method="post"  action="{{action('IndexController@adminRegisterForm')}}">
                <fieldset>
                {{ csrf_field() }}
              
                       <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email">
                      </div>
                   
                      <div class="form-group">
                        <label for="defaultconfig-2">Username</label>
                       <input class="form-control" name="name" maxlength="20" name="defaultconfig-2" id="defaultconfig-2" type="text" placeholder="Type Something..">
                    </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password">
                      </div>
                      <div class="form-group">
                        <label for="confirm_password">Confirm password</label>
                        <input id="confirm_password" class="form-control" name="confirmpassword" type="password">
                      </div>
                    
                  
                <div class="mt-3">
                  <input type='submit' class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="ZAREJESTRUJ" >
                </div>

              </fieldset>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Prawa autorskie</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <script src=" {{ asset('library/vendors/js/vendor.bundle.base.js') }}"></script>

  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->

  <script src=" {{ asset('library/js/off-canvas.js') }}"></script>
  <script src=" {{ asset('library/js/hoverable-collapse.js') }}"></script>
  <script src=" {{ asset('library/js/template.js') }}"></script>
  <script src=" {{ asset('library/js/settings.js') }}"></script>
  <script src=" {{ asset('library/js/todolist.js') }}"></script>
  <!-- endinject -->
 <!-- plugin js for this page -->
  <script src="{{ asset('library/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('library/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('library/js/form-validation.js') }}"></script>
  <script src="{{ asset('library/js/bt-maxLength.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

</html>