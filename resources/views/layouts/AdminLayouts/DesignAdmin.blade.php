<!DOCTYPE html>
<html lang="pl">

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
  <link rel="stylesheet" href="{{ asset('library/vendors/owl-carousel-2/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('library/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('library/vendors/jvectormap/jquery-jvectormap.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('library/css/horizontal-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('library/images/favicon.png') }}" />




   <!-- base:js -->
  <script src="{{ asset('library/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('library/js/off-canvas.js') }}"></script>
  <script src="{{ asset('library/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('library/js/template.js') }}"></script>
  <script src="{{ asset('library/js/settings.js') }}"></script>
  <script src="{{ asset('library/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('library/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('library/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('library/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
  <script src="{{ asset('library/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{ asset('library/js/dashboard.js') }}"></script>
  <script src="{{ asset('library/js/todolist.js') }}"></script>
  <!-- End custom js for this page-->

</head>
<body>
@include('layouts.AdminLayouts.HeaderAdmin')

@yield('content')

@include('layouts.AdminLayouts.FooterAdmin')