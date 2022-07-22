<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('user.create') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Penugasan" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="alamat_asal">Alamat Asal</label>
                        <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" placeholder="Alamat Asal" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="alamat_malang">Alamat Malang</label>
                        <input type="text" class="form-control" id="alamat_malang" name="alamat_malang" placeholder="Alamat Malang" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" aria-label="Default select example">
                            <option disabled selected value="">Select Jenis kelamin</option>
                            <option   value="Laki-laki">Laki-Laki</option>
                            <option   value="Perempuan">Perempuan</option>
                           
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="no_hp">No Handphone</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone" required>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_kelompok">Kelompok</label>
                        <select name="id_kelompok" class="form-control" aria-label="Default select example">
                            <option disabled selected value="">Select Kelompok</option>
                            @foreach($kelompok as $d)
                            <option value="{{$d->id}}">{{$d->kelompok}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->