
@extends('layouts.app')

@section('title')
	  Crear Cliente
@endsection

@section('content')


	<form action="/clientes" method="POST" role="form">
		{{ csrf_field() }}
			 <legend>Crear Clientes</legend>
		@include('clientes._form')

		<button type="submit" class="btn btn-primary">Crear</button>
	</form>



@endsection
