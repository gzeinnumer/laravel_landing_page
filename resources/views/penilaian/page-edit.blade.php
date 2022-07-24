@extends('layouts.master-dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Penilaian</h1>
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

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detail Nilai</h3>

                            <div class="card-tools">

                            </div>
                        </div>

                        <form action="{{ route('penilaian.edit', ['id' => $data->id]) }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" value="{{ $data->users->nama_lengkap }}" required readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">NIM</label>
                                    <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" value="{{ $data->users->nim }}" required readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nilai1">Nilai 1</label>
                                    <input type="text" class="form-control" id="nilai1" name="nilai1" placeholder="Nilai 1" value="{{ $data->nilai1 }}" required >
                                </div>
                                <div class="form-group">
                                    <label for="nilai2">Nilai 2</label>
                                    <input type="text" class="form-control" id="nilai2" name="nilai2" placeholder="Nilai 2" value="{{ $data->nilai2 }}" required >
                                </div>
                                <div class="form-group">
                                    <label for="nilai3">Nilai 3</label>
                                    <input type="text" class="form-control" id="nilai3" name="nilai3" placeholder="Nilai 3" value="{{ $data->nilai3 }}" required >
                                </div>
                                <div class="form-group">
                                    <label for="nilai4">Nilai 4</label>
                                    <input type="text" class="form-control" id="nilai4" name="nilai4" placeholder="Nilai 2" value="{{ $data->nilai4 }}" required >
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->

        @include('penilaian.modal-add')

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop