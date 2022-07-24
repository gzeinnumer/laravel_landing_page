@extends('layouts.master-dashboard')

@section('content')
<!-- Content Wrapper. Contains page content -->
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
                        <div class="row">
                            <div class="col-12">
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-add">
                                    Tambah Data
                                </button>
                            </div>
                        </div>
            

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
                            <h3 class="card-title">List Kelompok</h3>

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
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kelompok</th>
                                        <th>Link Grup</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->kelompok}}</td>
                                        <td>{{$d->link_grup}}</td>
                                        <td>
                                            <a href="{{ route('kelompok.delete' , [ 'id' => $d->id ]) }}" class="btn  btn-danger ">Danger</a>
                                            <a href="{{ route('kelompok.detailinfo' , [ 'id' => $d->id ]) }}" class="btn  btn-primary ">Info</a>
                                            <a href="{{ route('kelompok.detailedit' , [ 'id' => $d->id ]) }}" class="btn  btn-warning ">Edit</a>
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

        @include('kelompok.modal-add')

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@stop