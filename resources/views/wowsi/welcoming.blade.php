<!-- WElcoming -->
<div class="text-center scr-height bg-blue">
  <div class="logo text-center p-head"><img src="asset/logo.png" width="120px" height="120px" alt="" /></div>
  <img class="mt-4" src="/asset/textWelcom.png" width="85%" alt="" />
  <div class="namaOrang text-capitalize mt-5" style="font-size: 36px; font-weight:600; color:#ffff; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">@if(Auth::user()!=null) {{ Auth::user()->nama_lengkap}} @endif</div>
</div>
<!-- End of Welcoming -->