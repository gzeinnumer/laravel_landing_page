@extends('layouts.master')

@section('extra_modal')

@include('landing.modal-login')

@stop


@section('content')

@include('landing.banner')
@include('landing.services')
@include('landing.about')
@include('landing.client')
@include('landing.pricing')

@stop