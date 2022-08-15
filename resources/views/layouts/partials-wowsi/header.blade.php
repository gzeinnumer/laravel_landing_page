<header>
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
          <li class="nav-item">
            <a class="nav-link active fw-bolder" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bolder" aria-current="page" href="#timeline">Timeline</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bolder" aria-current="page" href="#kelompok">Kelompok</a>
          </li>


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