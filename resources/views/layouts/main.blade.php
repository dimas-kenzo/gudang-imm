<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset ( "assets/" ) }}/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset ( "assets/img/favicon/favicon.ico" ) }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/fonts/materialdesignicons.css" ) }}" />
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/fonts/fontawesome.css" ) }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/css/rtl/core.css" ) }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/css/rtl/theme-default.css" ) }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset ( "assets/css/demo.css" ) }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" ) }}" />
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/libs/node-waves/node-waves.css" ) }}" />
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/libs/typeahead-js/typeahead.css" ) }}" />
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/libs/apex-charts/apex-charts.css" ) }}" />
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/libs/swiper/swiper.css" ) }}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/css/pages/cards-statistics.css" ) }}" />
    <link rel="stylesheet" href="{{ asset ( "assets/vendor/css/pages/cards-analytics.css" ) }}" />
    <!-- Helpers -->
    <script src="{{ asset ( "assets/vendor/js/helpers.js" ) }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset ( "assets/vendor/js/template-customizer.js" ) }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset ( "assets/js/config.js" ) }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        {{-- Sidebar Section --}}
        @include('./components/sidebar')
        {{-- / sidebar Section --}}

        <!-- Layout container -->
        <div class="layout-page">

          {{-- Navbar --}}
          @include('./components/navbar')
          {{-- Navbar --}}

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4">
                @yield('content')
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with <span class="text-danger">❤️</span> by
                    <a href="https://pixinvent.com" target="_blank" class="footer-link fw-medium">Pixinvent</a>
                  </div>
                  <div>
                    <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                      >License</a
                    >
                    <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->

        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset ( "assets/vendor/libs/jquery/jquery.js" ) }}"></script>
    <script src="{{ asset ( "assets/vendor/libs/popper/popper.js" ) }}"></script>
    <script src="{{ asset ( "assets/vendor/js/bootstrap.js" ) }}"></script>
    <script src="{{ asset ( "assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js" ) }}"></script>
    <script src="{{ asset ( "assets/vendor/libs/node-waves/node-waves.js" ) }}"></script>

    <script src="{{ asset ( "assets/vendor/libs/hammer/hammer.js" ) }}"></script>
    <script src="{{ asset ( "assets/vendor/libs/i18n/i18n.js" ) }}"></script>
    <script src="{{ asset ( "assets/vendor/libs/typeahead-js/typeahead.js" ) }}"></script>

    <script src="{{ asset ( "assets/vendor/js/menu.js" ) }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset ( "assets/vendor/libs/apex-charts/apexcharts.js" ) }}"></script>
    <script src="{{ asset ( "assets/vendor/libs/swiper/swiper.js" ) }}"></script>

    <!-- Main JS -->
    <script src="{{ asset ( "assets/js/main.js" ) }}"></script>

    <!-- Page JS -->
    <script src="{{ asset ( "assets/js/dashboards-analytics.js" ) }}"></script>
  </body>
</html>
