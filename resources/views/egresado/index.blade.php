@extends('layouts.admin')
	@section('content')
	@include('egresado.modal')
	
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
				<strong>Genero actualizado correctamente</strong>	
			</div>



		<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Operaciones</th>
			</thead>
			<tbody id="datos"></tbody>
		</table>
	@endsection

	@section('scripts')
		{!!Html::script('js/script2.js')!!}
	@endsection