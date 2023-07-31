<!DOCTYPE html>

<html lang="en" class="light-style     customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="http://full-version1.test/assets/" data-base-url="http://full-version1.test" data-framework="laravel"
    data-template="blank-menu-theme-default-light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Cover - Pages |
        Vuexy -
        Bootstrap Admin Template</title>
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="bIAH5RgVwEo1LieDik7r3wzmTbUeGgDIUYOWLFFr">
    <!-- Canonical SEO -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="http://full-version1.test/assets/img/favicon/favicon.ico" />



    <!-- Include Styles -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/fonts/fontawesome.css?id=cfafea31c584abe0bcf920c389ea9b3f" />
    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/fonts/tabler-icons.css?id=2453a120e527a28a5332ba0632c09bb3" />
    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/fonts/flag-icons.css?id=403b97c176f3cdf56a3cbf09107ee240" />

    <!-- Core CSS -->
    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/css/rtl/core.css?id=6e91687cdc9722a7dc76b177031e2171"
        class="template-customizer-core-css" />
    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/css/rtl/theme-default.css?id=b96b88dd96f2a9fe3f5fa652556c6df6"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="http://full-version1.test/assets/css/demo.css?id=7f1606d3afed5bee5e88d8c1756931e3" />


    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css?id=0515f570433c3c071d76a93a194d8966" />
    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/libs/node-waves/node-waves.css?id=aa72fb97dfa8e932ba88c8a3c04641bc" />
    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/libs/typeahead-js/typeahead.css?id=16a78ddefa148df10b78cf41a4fa0629" />

    <!-- Vendor Styles -->
    <!-- Vendor -->
    <link rel="stylesheet"
        href="http://full-version1.test/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css" />


    <!-- Page Styles -->
    <!-- Page -->
    <link rel="stylesheet" href="http://full-version1.test/assets/vendor/css/pages/page-auth.css">

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- laravel style -->
    <script src="http://full-version1.test/assets/vendor/js/helpers.js"></script>
    <!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="http://full-version1.test/assets/vendor/js/template-customizer.js"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="http://full-version1.test/assets/js/config.js"></script>

  <script>
      window.templateCustomizer = new TemplateCustomizer({
          cssPath: '',
          themesPath: '',
          defaultShowDropdownOnHover: true, // true/false (for horizontal layout only)
          displayCustomizer: true,
          lang: 'en',
          pathResolver: function(path) {
              var resolvedPaths = {
                  // Core stylesheets
                  'core.css': 'http://full-version1.test/assets/vendor/css/rtl/core.css?id=6e91687cdc9722a7dc76b177031e2171',
                  'core-dark.css': 'http://full-version1.test/assets/vendor/css/rtl/core-dark.css?id=0498a508a7ffd7f69ed206a260d3ae4b',

                  // Themes
                  'theme-default.css': 'http://full-version1.test/assets/vendor/css/rtl/theme-default.css?id=b96b88dd96f2a9fe3f5fa652556c6df6',
                  'theme-default-dark.css': 'http://full-version1.test/assets/vendor/css/rtl/theme-default-dark.css?id=57cd8bbc8a76d93d0ac2224820ad3517',
                  'theme-bordered.css': 'http://full-version1.test/assets/vendor/css/rtl/theme-bordered.css?id=d19492d84c0337e80c52b687b1eca934',
                  'theme-bordered-dark.css': 'http://full-version1.test/assets/vendor/css/rtl/theme-bordered-dark.css?id=d8a80a2ede9e0b62adfdd0f7d4970aa9',
                  'theme-semi-dark.css': 'http://full-version1.test/assets/vendor/css/rtl/theme-semi-dark.css?id=86e8b541f3e5357183033f7a14c32ff2',
                  'theme-semi-dark-dark.css': 'http://full-version1.test/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=79f404d82450845e3dd703136667bf00',
              }
              return resolvedPaths[path] || path;
          },
          'controls': ["rtl", "style", "layoutType", "showDropdownOnHover", "layoutNavbarFixed",
              "layoutFooterFixed", "themes"
          ],
      });
  </script>
</head>

<body>


  <!-- Layout Content -->

<!-- Content -->
<div class="authentication-wrapper authentication-cover authentication-bg">
  <div class="authentication-inner row">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 p-0">
      <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
        <img src="{{ asset('assets/img/bg.png') }}" alt="auth-login-cover" class="img-fluid my-5 auth-illustration" style="height: 70%; width:60%">

        <img src="http://full-version1.test/assets/img/illustrations/bg-shape-image-light.png" alt="auth-login-cover" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png">
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-4">
          <a href="http://full-version1.test" class="app-brand-link gap-2">

          </a>
        </div>
        <!-- /Logo --> @if (session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
                                            @if ($errors->any())
@foreach ($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif
        <h3 class=" mb-1 fw-bold">Selamat Datang! 👋</h3>
        <p class="mb-4">Masuk menggunakan akun yang sudah dibuat.</p>
<form action="{{ route('login.action') }}" method="POST">
                        @csrf

          <div class="mb-3">
            <label for="email" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" type="username" placeholder="Masukan Username" autofocus>
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
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me">
              <label class="form-check-label" for="remember-me">
                Ingat Aku
              </label>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100 mb-2">
            Masuk
          </button>
          <a class="btn btn-info d-grid w-100" href="{{ route('Peta') }}">Lihat Peta</a>
        </form>





      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
<!--/ Content -->

  <!--/ Layout Content -->



  <!-- Include Scripts -->
  <!-- BEGIN: Vendor JS-->
<script src="http://full-version1.test/assets/vendor/libs/jquery/jquery.js?id=47cbfb034b7a6f74401a95d5d2d5a79c">
</script>
<script src="http://full-version1.test/assets/vendor/libs/popper/popper.js?id=70485ad9be8ba3e426172708feb35181">
</script>
<script src="http://full-version1.test/assets/vendor/js/bootstrap.js?id=20ee1fb467c35cfa117296dd1e9b4a8c"></script>
<script
    src="http://full-version1.test/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?id=44b8e955848dc0c56597c09f6aebf89a">
</script>
<script src="http://full-version1.test/assets/vendor/libs/node-waves/node-waves.js?id=4fae469a3ded69fb59fce3dcc14cd638">
</script>
<script src="http://full-version1.test/assets/vendor/libs/hammer/hammer.js?id=0a520e103384b609e3c9eb3b732d1be8">
</script>
<script src="http://full-version1.test/assets/vendor/libs/i18n/i18n.js?id=a255baaaf66a98d4b82ff85936db819b"></script>
<script
    src="http://full-version1.test/assets/vendor/libs/typeahead-js/typeahead.js?id=f6bda588c16867a6cc4158cb4ed37ec6">
</script>
<script src="http://full-version1.test/assets/vendor/js/menu.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8"></script>
<script src="http://full-version1.test/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="http://full-version1.test/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="http://full-version1.test/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="http://full-version1.test/assets/js/main.js?id=a4c96bfa42c6652699071b0e8b379958"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src="http://full-version1.test/assets/js/pages-auth.js"></script>
<!-- END: Page JS-->

</body>

</html>
