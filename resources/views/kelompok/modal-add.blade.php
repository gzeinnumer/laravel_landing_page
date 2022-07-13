<div class="modal fade" id="modal-add">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form action="{{ route('kelompok.create') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data Kelompok</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="kelompok">Kelompok</label>
            <input type="text" class="form-control" id="kelompok" name="kelompok" placeholder="Nama Kelompok" required>
          </div>
          <div class="form-group">
            <label for="link_grup">Link Group</label>
            <input type="text" class="form-control" id="link_grup" name="link_grup" placeholder="Link Group" required>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>

      </form>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->