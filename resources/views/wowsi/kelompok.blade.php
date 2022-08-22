<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WOWSI 2022</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="/" />
    <link rel="shortcut icon" type="image" href="asset/logo.ico"/>
    <link rel="stylesheet" href="  {{asset('css/style.css')}}"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<!-- Navbar -->
<header class="marginbottom">
  <nav class="navbar navbar-dark navbar-expand-lg shadow fixed-top mb-5" style="background-color: #7a7ae9">
    <div class="container">
      <a class="navbar-brand" href="{{ route('wowsi.index') }}">
        <img src="asset/logo.png" alt="" width="30" height="30" />
      </a>

      <a class="navbar-brand fw-bolder" href="{{ route('wowsi.index') }}">WOW SI 2022</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto text-center">


          @if(Auth::user()!=null)
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle rounded-pill fw-bolder text-center ps-3 pe-3 pt-0 pb-1 mt-2 ms-2" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ed8d35"> Akun </a>
            <ul class="dropdown-menu text-center border-warning" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item fw-bold" href="{{ route('wowsi-editakun.index') }}">Edit Akun</a></li>
              {{-- <li><a class="dropdown-item fw-bold" href="gantiPsw.html">Ganti Password</a></li> --}}
              <li><a class="dropdown-item border-bottom border-warning fw-bold" href="{{ route('wowsi-penugasan.index') }}">Penugasan</a></li>
              <li><a class="dropdown-item text-danger fw-bold" href="{{ route('logout.perform') }}">Sign Out</a></li>
            </ul>
          </li>

          @else
          <li class="nav-item">
            <a class="nav-link  rounded-pill fw-bolder text-center ps-3 pe-3 pt-0 pb-1 mt-2 ms-2" href="{{ route('login.show') }}"  style="background-color: #ed8d35"> Login </a>
          </li>
          
          @endif
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- End Of Navbar -->

<body>
    <!-- kelompok    -->
    <div class="row m-auto" style="width: 90%">
        <div class="tittle m-auto d-flex mb-5">
            <img src="asset/logo.png" alt="" width="130" height="130" />
            <div class="fw-bold ms-4 txt-shadow txt-tittle">
                <p class="s text-uppercase">Kelompok</p>
            </div>
        </div>

        <div class="col text-center border-danger col-md-4 mt-2 mb-3">
            <p><img class="dumblerKelompok" src="asset/dumbledorr.png" alt="" /></p>
        </div>

        <div class="col text-center col-md-8">
            <div class="gulungan">
                <p class="mb-0"><img src="asset/gulungan.png" width="100%" alt="" /></p>
            </div>
            <div class="kotakBelakang bg-kertas p-1 text-center ms-auto me-auto pb-5 pt-5" style="width: 83%">
              @if($datas != null)
              <div class="quest text-center">
                  <h2 class="fw-bold">Halo adventurer!</h2>
                  <br>
                  <h4>Kamu ada di kelompok <b>{{$datas->kelompoks->kelompok}}</b>,</h4>
                  <h4>cepat temui party member kamu pada link di bawah ini ya!</h4><br><br>
                  <a href="http://{{$datas->kelompoks->link_grup}}" class="btn btn-success text-uppercase">{{$datas->kelompoks->link_grup}}</a>
              </div>
              @endif
              @if(request()->has('nimkelompok'))
              @if($datas == null)
              <div class="quest text-center">
                <h2 class="fw-bold">Halo adventurer!</h2>
                <br>
                <h4>Wah sepertinya kamu tidak terdaftar di party manapun nih. Mungkin kamu salah memasukkan NIM kamu ya? Yuk silahkan dicek kembali dan coba cari ulang yaa! </h4>
              </div>
              @endif
              @endif
            </div>
            <div class="gulungan">
                <p class="mb-0"><img src="asset/gulungan.png" width="100%" alt="" /></p>
            </div>
        </div>
    </div>
    <!-- kolom kanan -->

    <!-- END OF QUEST -->



    <!-- Footer -->
    <footer class="mb-0 mt-5 text-light" style="background-color: #7a7ae9">
        <p class="text-center mb-0">© WOW SI 2022 X P2S EMSI 2022/2023</p>
    </footer>
    <!-- End of footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>