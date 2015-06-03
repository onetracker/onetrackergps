@extends('app')

@section('content')

<script type="text/javascript">

	function validateEmail(email) {
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
			if (reg.test(email) == false) 
			{
				alert("email no valido");
				return false;
			}
	
			return true;}

	function validateRepeat(email) {
	
			if ( email != document.getElementById('email').value) 
			{
				alert("los dos email no son iguales");
				return false;
			}
			return true;}

</script>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Este es un servicio nuevo</h1>

				{!! Form::open(array('route' => 'contact/save/', 'class' => 'form')) !!}
				
				<div class="form-group">
					{!! Form::hidden('id', 0) !!}
					{!! Form::label('Nombre') !!}
					{!! Form::text('name', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el nombre de cliente')) !!}
					{!! Form::label('Email') !!}
					<br/><input type="text" id='email' name='email' onblur="validateEmail(this.value)" placeholder='Escriba su email' required/><br/>
					{!! Form::label('Repetir email') !!}
					<br/><input type="text" id='email' name='email' onblur="validateRepeat(this.value)" onpaste="return false;" placeholder='Escriba su email otra vez' required/><br/>
					{!! Form::label('Ciudad') !!}
					{!! Form::text('city', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su ciudad')) !!}
					{!! Form::label('Compañia') !!}
					{!! Form::text('group', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su compañia y organizacion')) !!}
					{!! Form::label('Asunto') !!}
					{!! Form::text('subject', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el asunto')) !!}
					{!! Form::label('Mensaje') !!}
					{!! Form::textarea('text', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba el mensaje')) !!}
					
				</div>
				
				<div class="form-group">
					{!! Form::submit('Ingresar', 
					  array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

		</div>
    </div>
</div>

@endsection
