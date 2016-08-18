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
					<th>Tipo de persona</th>
					<!-- <th>CP</th> -->
					<th>Teléfono</th>
					<th>Referencia</th>
					<th>Dirección</th>
					<th>E-mail</th>
				</tr>
			</thead>
			<tbody>
				@foreach($asesores as $asesor)
					<tr>
						<td>{{$asesor['matricula']}}</td>
						<td>{{$asesor['nombre_razon'].' '.$asesor['apellido_paterno'].' '.$asesor['apellido_materno']}}</td>
						<td>{{$asesor->tipoPersona()->first()->descripcion_tipo_persona}}</td>
						<!-- <td>{{$asesor['codigo_postal']}}</td> -->
						<td>{{$asesor['telefono']}}</td>
						<td>{{$asesor['referencia']}}</td>
						<td>{{$asesor['colonia_region'].' '.$asesor['calle'].' '.$asesor['numero_exterior_lote']}}</td>
						<td>{{$asesor['email']}}</td>
					</tr>
				@endforeach

			</tbody>
		</table>
@stop