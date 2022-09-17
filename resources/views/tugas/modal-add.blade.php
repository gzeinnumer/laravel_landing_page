<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="{{ route('tugas.create') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Tugas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_penugasan">Nama Penugasan</label>
                        <input type="text" class="form-control" id="nama_penugasan" name="nama_penugasan" placeholder="Nama Penugasan" required>
                    </div>
                    <div class="form-group">
                        <label for="detail">Detail</label>
                        <textarea type="text" class="form-control" id="detail" name="detail" placeholder="Detail" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="link_penting">Link Penting</label>
                        <input type="text" class="form-control" id="link_penting" name="link_penting" placeholder="Link Penting" required>
                    </div>
                    <div class="form-group">
                        <label for="link_submit">Link Submit</label>
                        <input type="text" class="form-control" id="link_submit" name="link_submit" placeholder="Link Submit" required>
                    </div>
                    <div class="form-group">
                        <label for="deadline">Deadline</label>
                        <input type="date" class="form-control" id="deadline" name="deadline" placeholder="Deadline" required>
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