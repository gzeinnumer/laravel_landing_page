<!DOCTYPE html>
<html lang="en">

@include('layouts.partials-dashboard.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.partials-dashboard.preloader')

        @include('layouts.partials-dashboard.nav')

        @include('layouts.partials-dashboard.aside')

        @yield('content')

        @include('layouts.partials-dashboard.footer')
    </div>
    <!-- ./wrapper -->
    @include('layouts.partials-dashboard.js')

</body>

</html>