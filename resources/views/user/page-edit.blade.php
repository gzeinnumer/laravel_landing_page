@extends('layouts.master-dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
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
                            <h3 class="card-title">Detail User</h3>

                            <div class="card-tools">

                            </div>
                        </div>

                        <form action="{{ route('user.edit', ['id' => $data->id]) }}" method="POST">
                            @csrf
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required value="{{$data->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required value="{{$data->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                                    <small class="form-hint">
                                        Ignore password if you wont change it.
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" required value="{{$data->nama_lengkap}}">
                                </div>
                                <div class="form-group">
                                    <label for="nim">Nim</label>
                                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim" required value="{{$data->nim}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_asal">Alamat Asal</label>
                                    <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" placeholder="Alamat Asal" required value="{{$data->alamat_asal}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_malang">Alamat Malang</label>
                                    <input type="text" class="form-control" id="alamat_malang" name="alamat_malang" placeholder="Alamat Malang" required value="{{$data->alamat_malang}}">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" required value="{{$data->tempat_lahir}}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required value="{{$data->tanggal_lahir}}">
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" aria-label="Default select example" required>
                                        <option disabled selected value="">Select Jenis Kelamin</option>
                                        <option value="Laki-laki" @if($data->jenis_kelamin == "Laki-laki") selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($data->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama" required value="{{$data->agama}}">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No Hp</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No Hp" required value="{{$data->no_hp}}">
                                </div>
                                <div class="form-group">
                                    <label for="id_kelompok">Kelompok</label>
                                    <select name="id_kelompok" class="form-control" aria-label="Default select example" required>
                                        <option disabled selected value="">Select Kelompok</option>
                                        @foreach($kelompok as $d)
                                        <option value="{{$d->id}}" @if($data->id_kelompok == $d->id) selected @endif>{{$d->kelompok}}</option>
                                        @endforeach
                                    </select>
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

        @include('user.modal-add')


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop