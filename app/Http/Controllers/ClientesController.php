<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
   public function index()
   {
   	 $clientes= cliente::all();
    return view('/clientes.index',['clientes' => $clientes]);
   }


public function create()
   {
   	return view('clientes.create');
   
   }

 public function show(cliente $cliente)
   {
   	// $cliente = cliente::find($id);
    return view('clientes.show',['cliente' => $cliente]);
   }


public function store()
   {
    //dd(request()->all());
    cliente::create(request()->all());
    return redirect('/clientes');
   }

public function edit(cliente $cliente)
   {
    return view('clientes.edit',compact('cliente'));
   
   }

}
