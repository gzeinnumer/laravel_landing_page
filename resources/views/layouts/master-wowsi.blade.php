<!DOCTYPE html>
<html lang="en">

  {{-- Head Tag --}}
  @include('layouts.partials-wowsi.head')

  <!-- Navbar -->
  @include('layouts.partials-wowsi.header')
  <!-- End Of Navbar -->

  <body>

    @yield('extra_modal2')

    @yield('content-wowsi')


    <br /><br /><br /><br /><br /><br /><br/>
    @include('layouts.partials-wowsi.js')
    @include('layouts.partials-wowsi.footer')
  </body>
</html>
