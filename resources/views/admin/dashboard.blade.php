@extends('admin.layout')

@section('content-header')

	<section class="content-header">
      <h1>
        Inicio
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      </ol>
    </section>
@stop


@section('content')

	<p>	Este es el contenido del dashboard</p>
	<p> Hola {{ auth()->user()->name}}</p>
@stop