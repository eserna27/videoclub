@extends('layouts.master')
@section('content')
  @include('catalog.form', array('method' => "POST"))
@stop
