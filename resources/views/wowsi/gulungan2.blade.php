<!-- Gulungan -->
<div class="gulungan text-center mt-5">
  <p class="mb-0"><img src="asset/gulungan.png" width="92%" alt="" /></p>
</div>
<!-- end gulungan -->
<div class="tengah w-75 text-center ms-auto me-auto bg-kertas">
  <!-- about -->
  <div id="about">
    <div class="ms-auto me-auto text-center" id="about">
      <img src="asset/jamur.png" width="40%" alt="" />
    </div>
    <!-- yputube -->
    <div class="me-auto ms-auto mt-4 mb-4">

      <iframe class="youtube" frameborder="0" scrolling="no" marginheight="" marginwidth="0" type="text/html" src="https://www.youtube.com/embed/IXCB4XUkkdY?controls=0" title="YouTube video player">
        <div>
          <small><a href="https://youtubeembedcode.com/de/">youtubeembedcode de</a></small>
        </div>
        <div>
          <small><a href="https://betting-utan-licens.nu/">betting-utan-licens.nu</a></small>
        </div>
      </iframe>
    </div>
    <!-- end of youtube -->

    <p class="txt-tittle2 text-uppercase fw-bold hitam">wow si</p>
    <p class="ms-5 me-5">
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint inventore alias doloribus veniam fuga, ea impedit quae atque sequi quisquam id facilis expedita molestiae, modi nobis suscipit voluptatibus sed? Perferendis dolores autem voluptatem deserunt, nostrum odio tempore alias iusto officia rerum consequatur libero quaerat impedit. Autem, quos. Maiores necessitatibus nulla architecto obcaecati quae, aliquam atque, dicta quasi totam deleniti delectus excepturi ipsam eaque, ipsa
      voluptates et illum! Porro, dolorum earum.
    </p>

    <!-- icon -->
    <div class="icon w-50 ms-auto me-auto">
      <a class="p-2" href="https://youtube.com/channel/UCg4l9tDfyj36B5camN1qoig"><i class="fa-brands fa-youtube fa-2x" style="color: #cfae74"></i></a>
      <a class="p-2" href="https://instagram.com/wow_siub?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram fa-2x" style="color: #cfae74"></i></a>
      <a class="p-2" href="https://liff.line.me/1645278921-kWRPP32q/?accountId=esl8182x"><i class="fa-brands fa-line fa-2x" style="color: #cfae74"></i></a>
      <a class="p-2" href="https://twitter.com/WoW_SIUB?t=Up1cHPgQJEBj96av-h0nxg&s=09"><i class="fa-brands fa-twitter fa-2x" style="color: #cfae74"></i></a>
    </div>
    <!-- end of icon -->
    <img src="asset/page break.png" width="100%" alt="" />
  </div>
  <!-- end of about -->

  <!-- Timeline -->
  <div id="timeline">
    <div class="timeline txt-tittle3 text-uppercase fw-bold txt ms-auto me-auto hitam mb-5" id="timeline">t i m e l i
      n e</div>
    <div class="row ms-auto me-auto " style="width: 100%;">
      <div class="col">
        <div class=" me-auto ms-auto mt-5"> <img src="asset/c1.svg" class="kotak" alt=""></div>
        Chapter 1
      </div>
      <div class="col">
        <div class="kotak me-auto ms-auto mt-5"> <img src="asset/c2.svg" class="kotak" alt=""></div>
        Chapter 2
      </div>
      <div class="col">
        <div class="kotak me-auto ms-auto mt-5"> <img src="asset/c3.svg" class="kotak" alt=""></div>
        Chapter 3
      </div>
    </div>
    <div class="row ms-auto me-auto " style="width: 85%;">
      <div class=" col bg">
        <div class="kotak me-auto ms-auto mt-5"><img src="asset/c4.svg" class="kotak" alt=""></div>
        Chapter 4
      </div>
      <div class="col text-center">
        <div class="kotak me-auto ms-auto mt-5"><img src="asset/chest.svg" class="kotak" alt=""></div>
        Chapter 5
      </div>
    </div>
    <img src="asset/page break.png" width="100%" alt="" />
  </div>
  <!-- end of timeline -->

  <!-- kelompok -->
  <div class="kelompok" id="kelompok">
    <div class="row pb-lg-5 p-5">
      <div class="col-sm-3 mt-3"><img src="asset/guardian.png" width="100%" alt="" /></div>
      <div class="col-sm-6 mt-auto mb-auto">
        <form action="{{ route('wowsi.search') }}" method="get">
          <label for="cari" class="fw-bold fs-2 mb-3">You will need a party to pass this journey. Find your party here!</label>
          <div class="input-group search">
            <input id="cari" type="text" class="form-control" placeholder="Masukkan NIM kamu" name="nimkelompok" />
            <div class="input-group-append" id="carikelompok">
              <button class="rounded-end btn-dark btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap" style="border-radius: 0px" type="submit" >
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      {{-- Modal Button --}}
      {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> --}}

      {{-- Modal --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered container">
          <div class="modal-content background-modal">
            
            <div class="modal-body me-3 my-2">
              <div class="row">
                <div class="col-sm-4 d-flex flex-sm-column justify-content-center" >
                  <img src="asset/logo.png" width="120px" height="120px" alt="" style="margin-left: 15px" />
                </div>
                <div class="col-sm-8 ">

                  @if($datas != null)
                  <div class="col-sm-6 mt-auto mb-auto">
                    <label for="cari" class="fw-bold fs-2 mb-3">{{$datas->kelompoks->kelompok}}</label>
                    <label for="cari" class="fw-bold fs-2 mb-3">{{$datas->kelompoks->link_grup}}</label>
                  </div>
                  @endif
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- End of Modal --}}
      
      <div class="col-sm-3 mt-3"><img src="asset/guardiankanan.png" alt="" width="100%" /></div>

      {{-- @if($datas != null)
      <div class="col-sm-6 mt-auto mb-auto">
        <label for="cari" class="fw-bold fs-2 mb-3">{{$datas->kelompoks->kelompok}}</label>
        <label for="cari" class="fw-bold fs-2 mb-3">{{$datas->kelompoks->link_grup}}</label>
      </div>
      @endif --}}

    </div>
  </div>
  <!-- end of kelompok -->
</div>
<!-- Gulungan -->
<div class="gulungan text-center">
  <p class="mb-0"><img src="asset/gulungan.png" width="92%" alt="" /></p>
</div>
<!-- end gulungan -->