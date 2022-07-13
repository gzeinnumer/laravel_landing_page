@extends('layouts.master-dashboard')




@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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

        {{-- CTA MODAL --}}
        <div class="row">
          <div class="col-12">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-add">
              Tambah
            </button>
          </div>
        </div>

        <br>

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
                      <th>Link Group</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $d)
                    <tr>
                      <td>{{ $d->id }}</td>
                      <td>{{ $d->kelompok }}</td>
                      <td>{{ $d->link_grup }}</td>
                      <td>
                        <a href="{{ route('kelompok.detailinfo', ['id'=> $d->id ]) }}"><button type="button" class="btn btn-info">Info</button></a>
                        <a href="{{ route('kelompok.delete', ['id'=> $d->id ]) }}"><button type="button" class="btn btn-danger">Delete</button></a>
                        <a href="{{ route('kelompok.detailedit', ['id'=> $d->id ]) }}"><button type="button" class="btn btn-warning">Edit</button></a>
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
        
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->

      @include('kelompok.modal-add')
    </section>
    <!-- /.content -->
  </div>

@stop