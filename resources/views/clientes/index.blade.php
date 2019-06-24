@extends('layouts.app')

@section('title')
 Clientes 
@endsection

@section ('content')
	<h2>Listado de Clientes</h2>
    <table class="table table-hover">
    	<thead>
    		<th>Doc. Fiscal</th>
		    <th>Nombres</th>
		    {{-- <th>Residente</th> --}}
	    </thead>
	 <tbody>
		 @foreach ($clientes as $cliente)
			  <tr>
			   <td>
			     	<a href="/clientes/{{ $cliente->id }}">
				      {{ $cliente->docfiscal }} 
				    </a>
			   </td>
               
               <td>
                  {{ $cliente->nombre }} 
				  {{ $cliente->apellido }} 
               </td> 
              {{--  <td>
        		  	@if ($cliente->isResident())
		    	  		*
				  	@endif
               </td>   --}}
               <td>
              	<a href="/clientes/edit/{{$cliente->id}}" class="btn btn-primary btn-sm">Editar</a>
               </td>

               <td>
              	<a href="/clientes/edit/{cliente}" class="btn btn-primary btn-sm">ver</a>
               </td>

               <td>
              	<a href="/clientes/edit/{cliente}" class="btn btn-primary btn-sm">Eliminar</a>
               </td>


			  </tr>
	     @endforeach
   </tbody>   
    </table>


@endsection

