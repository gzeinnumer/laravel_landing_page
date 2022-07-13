@extends('layouts.master-dashboard')




@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kelompok</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Detail Kelompok</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                
                <form action="{{ route('kelompok.edit',['id'=> $data->id]) }}" method="POST">
                  @csrf
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="kelompok">Kelompok</label>
                      <input type="text" class="form-control" id="kelompok" name="kelompok" placeholder="Nama Kelompok" value="{{ $data->kelompok }}" required>
                    </div>
                    <div class="form-group">
                      <label for="link_grup">Link Group</label>
                      <input type="text" class="form-control" id="link_grup" name="link_grup" placeholder="Link Group" value="{{ $data->link_grup }} " required>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
          
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

      @include('kelompok.modal-add')
    </section>
    <!-- /.content -->
  </div>

@stop