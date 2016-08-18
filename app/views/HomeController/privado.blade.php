@extends('layouts.bootstrap')

@section('head')
<title>Contacto</title>
<meta name='title' content='Login'>
<meta name='description' content='Login'>
<meta name='keywords' content='palabras, clave'>
<meta name='robots' content='noindex,nofollow'>
@stop

@section('perfil')
	<div class="hi-icon hi-icon-user" ></div>
	<div style="float:right;margin-left:-30px">{{Auth::user()->get()->nombre_usuario}}</div>

@stop

@section('content')


		<img alt="" src="assets/imagenes/letras.jpg" align="right"/>

<!--<h1>Bienvenido {{Auth::user()->get()->email}}</h1>-->

@stop

