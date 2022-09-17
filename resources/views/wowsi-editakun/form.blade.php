<!-- FORM -->

<div class="container">
  
  
  <form action="{{ route('wowsi-editakun.perform') }}" method="POST">
    @csrf
    <div class="row m-auto mt-0 p-5 shadow bg-kertas h-100" style="background-color: #f0e7d7; width: 70%; z-index: 2">
      @if(session()->has('success'))
      <div class="alert alert-success col-12" role="alert">
        {{ session('success') }}
      </div>
      @endif

        <input type="hidden" name="id" value="{{ Auth::user()->id}}" readonly />
  
      <div class="col-md-6 mb-1">
        <label class="form-label">Nama lengkap</label>
        <input type="text" class="form-control borklat" required name="nama_lengkap" value="{{ Auth::user()->nama_lengkap}}" readonly />
      </div>
  
      <div class="col-md-6 mb-1">
        <label class="form-label">NIM </label>
        <input type="text" class="form-control borklat" required name="username" value="{{ Auth::user()->username}}" readonly />
      </div>
  
          {{-- DIEMIN AJA --}}
        <input type="text" class="form-control borklat"  name="nim" value="{{ Auth::user()->nim}}" readonly hidden/>
  
  
      <div class="col-md-6 mb-1">
        <label class="form-label">Password</label>
        <input type="text" class="form-control borklat" name="password" value="" />
        <small style="font-size: .685em;">
          Ignore password if you wont change it.
        </small>
      </div>
  
      <div class="col-md-6 mb-1">
        <label class="form-label">Email</label>
        <input type="email" class="form-control borklat" required name="email" value="{{ Auth::user()->email}}" />
      </div>
  
      <div class="col-md-6 mb-1">
        <label class="form-label">Tempat Lahir </label>
        <input type="text" name="tempat_lahir" class="form-control borklat"  value="{{ Auth::user()->tempat_lahir}}" />
      </div>
  
     
      <div class="col-md-6 mb-1">
        <label class="form-label">Tanggal Lahir </label>
        <input type="date" name="tanggal_lahir" class="form-control borklat"  value="{{ Auth::user()->tanggal_lahir}}" />
      </div>
  
  
      <div class="col-md-6 mb-1">
        <label class="form-label">No Handphone </label>
        <input type="text" class="form-control borklat"  name="no_hp" value="{{ Auth::user()->no_hp}}" />
      </div>
  
      <div class="col-md-6 mb-1">
        <label class="form-label">Agama </label>
        <input type="text" class="form-control borklat"  name="agama" value="{{ Auth::user()->agama}}" />
      </div>
  
      <div class="col-md-6 mb-1">
        <label class="form-label">Alamat di Malang</label>
        <textarea class="form-control borklat" name="alamat_malang"  cols="30" rows="4" >{{ Auth::user()->alamat_malang}}</textarea>
        {{-- <input type="text" class="form-control borklat" required name="alamat_malang" value="{{ Auth::user()->alamat_malang}}" /> --}}
      </div>
  
      <div class="col-md-6 mb-1">
        <label class="form-label">Alamat asal</label>
        <textarea class="form-control borklat" name="alamat_asal"  cols="30" rows="4" >{{ Auth::user()->alamat_asal}}</textarea>
        {{-- <input type="text" class="form-control borklat" required name="alamat_asal" value="{{ Auth::user()->alamat_asal}}" /> --}}
      </div>
  
      <div class="col-md-6 mb-1">
        <label class="form-label">Jenis Kelamin</label>
  
        <select class="form-select borklat" aria-label="Default select example "  name="jenis_kelamin">
          <option value="Perempuan" @if(Auth::user()->jenis_kelamin=="Perempuan") selected @endif>Perempuan</option>
          <option value="Laki-laki" @if(Auth::user()->jenis_kelamin=="Laki-laki") selected @endif>Laki-laki</option>
        </select>
      </div>
  
      <div class="col-md-6 mb-1">
        <label class="form-label"> </label>
      </div>
  
      <input class="btn btn-warning fw-bold text-light m-auto mt-3" style="width: 200px" type="submit" value="Save" />
    </div>
  </form>
  {{-- End of Form --}}
</div>