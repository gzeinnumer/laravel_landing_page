<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('penilaian.create') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Nilai</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_user">User</label>
                        <select name="id_user" class="form-control" aria-label="Default select example" required>
                            <option disabled selected value="">Select User</option>
                            @foreach($user as $d)
                            <option value="{{$d->id}}">{{$d->nama_lengkap}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nilai1">Nilai 1</label>
                        <input type="text" class="form-control" id="nilai1" name="nilai1" placeholder="Nilai 1"  required >
                    </div>
                    <div class="form-group">
                        <label for="nilai2">Nilai 2</label>
                        <input type="text" class="form-control" id="nilai2" name="nilai2" placeholder="Nilai 2"  required >
                    </div>
                    <div class="form-group">
                        <label for="nilai3">Nilai 3</label>
                        <input type="text" class="form-control" id="nilai3" name="nilai3" placeholder="Nilai 3"  required >
                    </div>
                    <div class="form-group">
                        <label for="nilai4">Nilai 4</label>
                        <input type="text" class="form-control" id="nilai4" name="nilai4" placeholder="Nilai 2"  required >
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