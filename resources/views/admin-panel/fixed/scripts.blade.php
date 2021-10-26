
<script src="{{ asset('public/assets/vendor/jquery/jquery.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/plugins/bootstrap-notify.js') }}"></script>
<script src="{{ asset('public/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('public/assets/js/main.js') }}"></script>
<script src="{{ asset('public/assets/js/now-ui-dashboard.min.js') }}"></script>
<script src="{{ asset('public/assets/demo/demo.js') }}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
@yield('javascript')

