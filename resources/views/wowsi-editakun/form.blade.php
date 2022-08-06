<!-- FORM -->
<form action="{{ route('wowsi-editakun.perform') }}" method="POST">
  @csrf
  <div class="row m-auto mt-0 p-5 shadow bg-kertas h-100" style="background-color: #f0e7d7; width: 70%; z-index: 2">

    <input type="hidden" name="id" value="{{ Auth::user()->id}}" readonly />

    <div class="col-md-6 mb-1">
      <label class="form-label">Nama lengkap</label>
      <input type="text" class="form-control borklat" required name="nama_lengkap" value="{{ Auth::user()->nama_lengkap}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">Password</label>
      <input type="text" class="form-control borklat" required name="password" value="" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">Tempat Lahir </label>
      <input type="text" name="tempat_lahir" class="form-control borklat" required value="{{ Auth::user()->tempat_lahir}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">NIM </label>
      <input type="text" class="form-control borklat" required name="nim" value="{{ Auth::user()->nim}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">Tanggal Lahir </label>
      <input type="date" name="tanggal_lahir" class="form-control borklat" required value="{{ Auth::user()->tanggal_lahir}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">Email</label>
      <input type="email" class="form-control borklat" required name="email" value="{{ Auth::user()->email}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">Alamat asal</label>
      <input type="text" class="form-control borklat" required name="alamat_asal" value="{{ Auth::user()->alamat_asal}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">No Handphone </label>
      <input type="text" class="form-control borklat" required name="no_hp" value="{{ Auth::user()->no_hp}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">Agama </label>
      <input type="text" class="form-control borklat" required name="agama" value="{{ Auth::user()->agama}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">Alamat di Malang</label>
      <input type="text" class="form-control borklat" required name="alamat_malang" value="{{ Auth::user()->alamat_malang}}" />
    </div>

    <div class="col-md-6 mb-1">
      <label class="form-label">Jenis Kelamin</label>

      <select class="form-select borklat" aria-label="Default select example " required name="jenis_kelamin">
        <option value="Perempuan" @if(Auth::user()->jenis_kelamin=="Perempuan") selected @endif>Perempuan</option>
        <option value="Laki-laki" @if(Auth::user()->jenis_kelamin=="Laki-laki") selected @endif>Laki-laki</option>
      </select>
    </div>

    <input class="btn btn-warning fw-bold text-light m-auto mt-3" style="width: 200px" type="submit" value="Save" />
  </div>
</form>
{{-- End of Form --}}