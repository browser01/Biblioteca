@extends('layouts/app')


@section('title')
 {{ config('app.name') }} 
@endsection

@section('content')
<h1>Bienvenido a {{ config('app.name') }} </h1>
@endsection