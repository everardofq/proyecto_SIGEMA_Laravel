@extends('layouts.principal')
	
@section('content')
	@include('alerts.errors')
	@include('alerts.request')
	<div class="container-fluid bg-2">
		<div class="row">
	        <div class="col-sm-9 form-group">
				<div class="paginaInicio text-center">
				  <img src="img/logo2.png" width="400" height="300">
				  <h1>SIGEMA</h1> 
				  <p>Sistema para la Gestión de Egresados de Matemáticas</p>
				</div>
	        </div>
	    	<div class="col-sm-3" style="background-color:#1abc9c;">
	    		<div class="row" >
	        	<div class="col-sm-12 form-group">
					<div class="header-info">
						<h1>SIGEMA</h1>
						{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
							<div class="form-group">
								{!!Form::label('correo','Correo:')!!}	
								{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
							</div>
							<div class="form-group">
								{!!Form::label('contrasena','Contraseña:')!!}	
								{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
							</div>
							{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
						{!!Form::close()!!}
					</div>        	
	        	</div>
	      		</div>
	   		</div>
  		</div>
  	</div>

	
@endsection