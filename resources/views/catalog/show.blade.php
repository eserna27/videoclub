@extends('layouts.master')
@section('content')
  <br>
  <div class="row">
    <div class="col-sm-4 text-center">
      <img src="{{$pelicula['poster']}}"/>
    </div>
    <div class="col-sm-8">
      <h2>
        <strong> {{ $pelicula['title'] }} </strong>
        <br>
        <small>
          Año: {{$pelicula['year']}}
        </small>
        <br>
        <small>
          Director: {{$pelicula['director']}}
        </small>
      </h2>
      <p>
        <strong>Resumen: </strong>{{$pelicula['synopsis']}}
      </p>
      <p>
        <strong>Estado: </strong>@include('catalog.rented_message', array('rented' => $pelicula['rented']))
      </p>
      @include('catalog.btn_options', array('rented' => $pelicula['rented'], 'movie_id' => $movie_id))
    </div>
  </div>
@stop
