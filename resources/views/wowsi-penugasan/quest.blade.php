 <!-- quest -->
 <div class="row m-auto" style="width: 90%">

  <div class="tittle m-auto d-flex mb-5 mar-top" style="width: 90%;">
    <img class="titleLogo" src="asset/logo.png" alt="" />
    <div class="fw-bold ms-2 txt-shadow txt-tittle">
      <p class="s">QUEST</p>
    </div>
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
        <h4> {!! nl2br(e($d->detail)) !!}</h4><br>
        {{-- <a href="{!! nl2br(e($d->link_penting)) !!}"></a> --}}
        <p>{!! nl2br(e($d->link_penting)) !!}</p>
        <a href="http://{{ $d->link_submit }}"><p>{{ $d->link_submit }}</p><br></a>
        <h4 style="margin-left: 20px">{{ $d->deadline }}</h4>

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