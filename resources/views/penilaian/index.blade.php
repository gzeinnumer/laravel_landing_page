@extends('layouts.master-dashboard')

@section('head_spesial')
<!-- data tables -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.8/css/rowReorder.bootstrap4.min.css" />

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.8/js/dataTables.rowReorder.min.js"></script> -->

<script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>


<!-- DataTables  & Plugins -->
<script src="{{asset('dashboard/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@stop
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


            <div class="row">
                <form action="{{ route('penilaian.create') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Data Nilai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- Search Engine --}}
                        <div class="mb-3">
                            <label class="form-label">Find User</label>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" id="user_value" name="user_value" placeholder="User Name" oninvalid="searchUser('')" onkeyup="searchUser('')" onchange="searchUser('')" autofocus>
                                <select name="id_user" id="id_user" class="form-control" aria-label="Default select example" required>
                                    <option disabled selected value="">Select User</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nilai1">Nilai 1</label>
                            <input type="text" class="form-control" id="nilai1" name="nilai1" placeholder="Nilai 1" required>
                        </div>
                        <div class="form-group">
                            <label for="nilai2">Nilai 2</label>
                            <input type="text" class="form-control" id="nilai2" name="nilai2" placeholder="Nilai 2" required>
                        </div>
                        <div class="form-group">
                            <label for="nilai3">Nilai 3</label>
                            <input type="text" class="form-control" id="nilai3" name="nilai3" placeholder="Nilai 3" required>
                        </div>
                        <div class="form-group">
                            <label for="nilai4">Nilai 4</label>
                            <input type="text" class="form-control" id="nilai4" name="nilai4" placeholder="Nilai 2" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Nilai</h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- <table class="table table-hover text-wrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>id_user</th>
                                        <th>NIM</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nilai 1</th>
                                        <th>Nilai 2</th>
                                        <th>Nilai 3</th>
                                        <th>Nilai 4</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->id_user}}
                                        <td>{{$d->users->nim}}</td>
                                        <td>{{$d->users->nama_lengkap}}</td>
                                        <td>{{$d->nilai1}}</td>
                                        <td>{{$d->nilai2}}</td>
                                        <td>{{$d->nilai3}}</td>
                                        <td>{{$d->nilai4}}</td>

                                        <td>
                                            <a href="{{ route('penilaian.detailinfo' , [ 'id' => $d->id ]) }}" class="btn  btn-primary ">Info</a>
                                            <a href="{{ route('penilaian.detailedit' , [ 'id' => $d->id ]) }}" class="btn  btn-warning ">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <br> -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-bordered table-hover dataTable dtr-inline" id="myDatatable" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>id_user</th>
                                                <th>NIM</th>
                                                <th>Nama Lengkap</th>
                                                <th>Nilai 1</th>
                                                <th>Nilai 2</th>
                                                <th>Nilai 3</th>
                                                <th>Nilai 4</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
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


<script type="text/javascript">
    $(function() {
        var table = $('#myDatatable').DataTable({
            "paging": true,
            "lengthChange": false,
            "info": true,
            "responsive": true,

            processing: true,
            serverSide: false,
            autowidth: false,
            scrollX: true,
            cache: true,
            ajax: {
                type: 'GET',
                url: "{{ route('penilaian.data') }}"
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                },
                {
                    data: 'id_user',
                    name: 'id_user',
                },
                {
                    data: 'users.username',
                    name: 'users.username',
                },
                {
                    data: 'users.nama_lengkap',
                    name: 'users.nama_lengkap',
                },
                {
                    data: 'nilai1',
                    name: 'nilai1',
                },
                {
                    data: 'nilai2',
                    name: 'nilai2',
                },
                {
                    data: 'nilai3',
                    name: 'nilai3',
                },
                {
                    data: 'nilai4',
                    name: 'nilai4',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '125px'
                },
            ],
            language: {
                paginate: {
                    next: '&#8594;', // or '→'
                    previous: '&#8592;', // or '←' 
                }
            }
        });
    });
</script>
@stop