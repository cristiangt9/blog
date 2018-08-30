@extends('layout')

@section('content')

	<section class="pages container">
		<div class="page page-about">
			<h1 class="text-capitalize">404</h1>
			<cite>Página No Encontrada</cite>
			<div class="divider-2" style="margin: 35px 0;"></div>
			<p>Haga click en <a href="{{route('home')}}">home</a> para regresar</p>
		</div>
	</section>

@stop