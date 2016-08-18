@extends('layouts.bootstrapreportes')

@section('titulo')
{{$titulo_reporte}}
@stop
@section('content')


		<table class="table table-condensed" style="font-size:8px">


			<thead>
				<tr>
					<th>Matrícula</th>
					<th>Nombre/Razón social</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Tipo de persona</th>
					<!-- <th>CP</th> -->
					<th>Municipio</th>
					<!-- <th>Referencia</th> -->
					<!-- <th>Dirección</th>
					<th>E-mail</th> -->
				</tr>
			</thead>
			<tbody>
				@foreach($asesores as $asesor)
					<tr>
						<td>{{$asesor['matricula']}}</td>
						<td>{{utf8_decode($asesor['nombre_razon'])}}</td>
						<td>{{utf8_decode($asesor['apellido_paterno'])}}</td>
						<td>{{utf8_decode($asesor['apellido_materno'])}}</td>
						<td>{{$asesor->tipoPersona()->first()->descripcion_tipo_persona}}</td>
						<!-- <td>{{$asesor['codigo_postal']}}</td> -->
						<td>{{$asesor->municipio()->first()->nombre_municipio}}</td>
						<!-- <td>{{$asesor['referencia']}}</td>
						<td>{{$asesor['colonia_region'].' '.$asesor['calle'].' '.$asesor['numero_exterior_lote']}}</td>
						<td>{{$asesor['email']}}</td> -->
					</tr>
				@endforeach

			</tbody>

		</table>
@stop