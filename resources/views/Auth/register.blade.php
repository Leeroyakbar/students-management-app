<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ "../../../public/app_assets/assets/" }}"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register | Neuron Task</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('app_assets/assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('app_assets/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('app_assets/assets/vendor/css/pages/page-auth.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('app_assets/assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('app_assets/assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <img src="{{ asset('neuron-logo.png') }}" alt="" style="width: 100px; height: auto;">
                  <span class="app-brand-text demo text-body fw-bolder">Neuron</span>
                </a>
              </div>
              <!-- /Logo -->
              
              <form id="formAuthentication" class="mb-3" action="{{ route('register.save') }}" method="POST" class="user">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input
                    type="text"
                    class="form-control @error('name')is-invalid @enderror"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    autofocus
                    
                  />
                  @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email')is-invalid @enderror" id="email" name="email" placeholder="Enter your email" />
                  @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                    <input
                      type="password"
                      id="password"
                      class="form-control @error('password')is-invalid @enderror"
                      name="password"
                      aria-describedby="password"
                    />
                    @error('password')
                        <span class="invalid-feedback" >{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary d-grid w-100">Sign up</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('login') }}">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('app_assets/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('app_assets/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('app_assets/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('app_assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('app_assets/assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('app_assets/assets/js/main.js') }}"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
