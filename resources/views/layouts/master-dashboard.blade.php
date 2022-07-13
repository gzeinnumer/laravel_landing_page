<!DOCTYPE html>
<html lang="en">
  
@include('layouts.partials-dashboard.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  @include('layouts.partials-dashboard.preloader')

  <!-- Navbar -->
  @include('layouts.partials-dashboard.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.partials-dashboard.aside')

  <!-- Content Wrapper. Contains page content -->
  

  <!-- /.content-wrapper -->

    @yield('content')


  @include('layouts.partials-dashboard.footer')

</div>
<!-- ./wrapper -->

@include('layouts.partials-dashboard.js')

</body>
</html>
