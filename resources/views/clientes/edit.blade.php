
@extends('layouts.app')

@section('title')
	  Crear Cliente
@endsection

@section('content')
 <legend>Crear Clientes</legend>
	<form action="/clientes/{{ $cliente->id  }}" method="POST" role="form">
		{{ csrf_field() }}
		@include('clientes._form')
		<button type="submit" class="btn btn-primary">Modificar</button>
	</form>



@endsection
