@extends('layouts.master-wowsi')




@section('content-wowsi')

@include('wowsi.welcoming')
@include('wowsi.gulungan')

@stop

@section('extra_modal2')

@include('wowsi.modal-login')

@stop