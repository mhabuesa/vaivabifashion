<!DOCTYPE html>


<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="{{asset('admin') }}/assets/" data-template="vertical-menu-template">

  
<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2024 07:23:08 GMT -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Page</title>

    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    
    
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('admin') }}/assets/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/libs/typeahead-js/typeahead.css" /> 
    <!-- Vendor -->
<link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/libs/%40form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
<link rel="stylesheet" href="{{asset('admin') }}/assets/vendor/css/pages/page-auth.css">

    <!-- Helpers -->
    <script src="{{asset('admin') }}/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('admin') }}/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('admin') }}/assets/js/config.js"></script>
    
</head>

<body>

  <!-- Content -->

<div class="container-xxl">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-4">
      <!-- Login -->
      <div class="card">
        <div class="card-body">
          <!-- Logo -->
          <div class="app-brand justify-content-center mb-4 mt-2">
            <a href="index-2.html" class="app-brand-link gap-2">
              <span class="app-brand-logo demo"></span>
              <span class="app-brand-text demo text-body fw-bold ms-1">Vuexy</span>
            </a>
          </div>
          <!-- /Logo -->
          <h4 class="mb-1 pt-2">Welcome to Vuexy!</h4>

          <form method="POST" class="mb-3" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-3">
              <label for="email" class="form-label">Email or Username</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email or username" autofocus>
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label" for="password">Password</label>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
              </div>
            </div>
            <div class="mb-3">
              <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
</div>

<!-- / Content -->

  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="{{asset('admin') }}/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{asset('admin') }}/assets/vendor/libs/popper/popper.js"></script>
  <script src="{{asset('admin') }}/assets/vendor/js/bootstrap.js"></script>
  <script src="{{asset('admin') }}/assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="{{asset('admin') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{asset('admin') }}/assets/vendor/libs/hammer/hammer.js"></script>
  <script src="{{asset('admin') }}/assets/vendor/libs/i18n/i18n.js"></script>
  <script src="{{asset('admin') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
   <script src="{{asset('admin') }}/assets/vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{asset('admin') }}/assets/vendor/libs/%40form-validation/popular.js"></script>
<script src="{{asset('admin') }}/assets/vendor/libs/%40form-validation/bootstrap5.js"></script>
<script src="{{asset('admin') }}/assets/vendor/libs/%40form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="{{asset('admin') }}/assets/js/main.js"></script>
  

  <!-- Page JS -->
  <script src="{{asset('admin') }}/assets/js/pages-auth.js"></script>
  
</body>

</html>



