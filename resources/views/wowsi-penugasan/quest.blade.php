 <!-- quest -->
 <div class="row m-auto" style="width: 90%">
  <div class="tittle  d-flex mb-5 " style="margin-top: 100px">
    <img src="asset/logo.png" alt="" width="130" height="130" />
    <div class="fw-bold ms-4 txt-shadow txt-tittle"><p class="s">QUEST</p></div>
  </div>

  <div class="col text-center border-danger col-md-4 mt-2 mb-3">
    <br /><br />
    <p><img class="dumbler" src="asset/dumbledorr.png" alt="" /></p>
  </div>

  <div class="col text-center col-md-8">
    <div class="gulungan">
      <p class="mb-0"><img src="asset/gulungan.png" width="100%" alt="" /></p>
    </div>  
    <div class="kotakBelakang bg-kertas p-1 text-center ms-auto me-auto pb-5" style="width: 83%">
    @foreach($tugas as $d)
      <div class="quest mt-2 text-start ms-2">
        <h2 class="fw-bold">{{ $d->nama_penugasan }}</h2><br>
        <h3>{{ $d->detail }}</h3><br>
        <a href="http://{{ $d->link_submit }}"><h4>{{ $d->link_submit }}</h4><br></a>
        <h4>{{ $d->deadline }}</h4>

        <img src="asset/page break.png" width="100%" alt="" />
      </div>
    @endforeach
    </div>
    <div class="gulungan">
      <p class="mb-0"><img src="asset/gulungan.png" width="100%" alt="" /></p>
    </div>
  </div>
</div>
<!-- kolom kanan -->

<!-- END OF QUEST -->