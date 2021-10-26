<!DOCTYPE html>
<html lang="en">
@include('admin-panel.fixed.head')

<body>
  <div class="wrapper">
    @include('admin-panel.fixed.sidebar')

    <div class="main-panel" id="main-panel">

    @include('admin-panel.fixed.navbar')

     <div class="p-5">
        @yield('content')
     </div>

    </div>
  </div>
  @include('admin-panel.fixed.scripts')
</body>

</html>
