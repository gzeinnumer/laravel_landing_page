<!DOCTYPE html>
<html lang="en">

    @include('layouts.partials.head')

<body>

  
  @include('layouts.partials.preloader')

  @include('layouts.partials.header')

  
  @yield('extra_modal')

  @yield('content')


  @include('layouts.partials.footer')

  @include('layouts.partials.js')

</body>

</html>