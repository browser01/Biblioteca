@extends('layouts.app')

@section ('title')
Ficha de: {{ $cliente->nombre }} {{ $cliente->apellido }}
@endsection 

@section ('content') 
	<title>Detalle de Clientes</title>
	<h1>Cliente:  {{ $cliente->nombre }} {{ $cliente->apellido }}</h1>
   <p>{{ $cliente->docfiscal }} {{ $cliente->email }} {{ $cliente->direccion1 }}
   	{{ $cliente->direccion2 }} {{ $cliente->telefono }} {{ $cliente->celular }}
   	{{ $cliente->foto }} {{ $cliente->descuento }} {{ $cliente->limite }} </p>
   	<a href="/clientes/">Atras</a>
@endsection





