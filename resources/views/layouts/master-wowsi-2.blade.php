<!DOCTYPE html>
<html lang="en">

  {{-- Head Tag --}}
  @include('layouts.partials-wowsi-2.head')

  <!-- Navbar -->
  @include('layouts.partials-wowsi-2.header')
  <!-- End Of Navbar -->

  <body>

  
    @yield('content-wowsi')

    @yield('extra_modal2')

    <br /><br /><br /><br /><br /><br /><br/>
    @include('layouts.partials-wowsi.js')
    @include('layouts.partials-wowsi.footer')
  </body>
</html>
