<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>{{ $title }}</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('template/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('template/vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('template/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="main-panel">
            <div class="content-wrapper d-flex align-items-center auth px-0">
              <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                  <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <div class="brand-logo">
                      <img src="{{ asset('frontend/img/logo/logo.png') }}" alt="logo">
                    </div>
                    <h4>Hello! let's get started</h4>
                    <h6 class="font-weight-light">{{ $title }} to continue.</h6>

              @yield('container')

            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
  <!-- base:js -->
  <script src="{{ asset('template/vendors/base/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('template/js/template.js') }}"></script>

  <script src="{{asset('before/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('before/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('before/vendor/adminlte/js/adminlte.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
