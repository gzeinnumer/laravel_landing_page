@extends('layouts.master-dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tugas</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-add">
                            Tambah Data
                        </button>
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
                            <h3 class="card-title">List Tugas</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-wrap">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        {{-- <th>ID</th> --}}
                                        <th>Nama Penugasan</th>
                                        <th>Detail</th>
                                        <th>Link Penting</th>
                                        <th>Link Submit</th>
                                        <th>deadline</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>{{$d->id}}</td> --}}
                                        <td>{{$d->nama_penugasan}}</td>
                                        <td>{{$d->detail}}</td>
                                        <td>{{$d->link_penting}}</td>
                                        <td>{{$d->link_submit}}</td>
                                        <td>{{$d->deadline}}</td>
                                        <td>
                                            <a href="{{ route('tugas.delete' , [ 'id' => $d->id ]) }}" class="btn btn-block btn-danger btn-xs">Delete</a>
                                            <a href="{{ route('tugas.detailinfo' , [ 'id' => $d->id ]) }}" class="btn btn-block btn-primary btn-xs">Info</a>
                                            <a href="{{ route('tugas.detailedit' , [ 'id' => $d->id ]) }}" class="btn btn-block btn-warning btn-xs">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->

        @include('tugas.modal-add')

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop