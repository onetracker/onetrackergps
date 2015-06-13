
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="OneTracker GPS">

    <link href="api/bootstrap.min.css" rel="stylesheet">
    <link href="api/style.css" rel="stylesheet">

	<!-- SEO -->	
    <title>Contacto OneTracker GPS</title>

	<meta name="description" content="¿Que desea contarnos? Su opinión es importante" />
	<meta name="keywords" content="onetracker,onetrackergps,one,tracker,gps,contacto,opinion,importante" />
    <meta property='og:title' content="Conacto" /> <!-- facebook -->
    <meta property='og:description' content="¿Que desea contarnos? Su opinión es importante" />
    <meta property='og:type' content='website' />
    <meta property='og:url' content='http://onetrackergps.co/contact' />
	<meta property="og:site_name" content="Contacto">    

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
	
		$( document ).ready(function() { 
		
		});
	
	</script>

  </head>
<!-- NAVBAR
================================================== -->
  <body>
	<?php include_once("analyticstracking.php") ?>
	<?php include('template/menu.html'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        
        	<br/><br/><br/><br/><br/><br/><br/>
            <h1>¿Que desea contarnos?</h1>
            <p>Su opinión es importante</p>

				{!! Form::open(array('route' => 'save', 'class' => 'form', 'onsubmit' => 'alert(\'Se ha enviado el mensaje exitosamente\');')) !!}
				
				<div class="form-group">
				
					
					{!! Form::hidden('id', 0) !!}
					{!! Form::label('Nombre') !!}
					{!! Form::text('name', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su nombre')) !!}
					{!! Form::label('Email') !!}
					<input class='form-control' type="text" size="60" id='email' name='email' onblur="validateEmail(this.value)" placeholder='Escriba su email' required/>
					{!! Form::label('Repetir email') !!}
					<input class='form-control' type="text" id='email' name='email' onblur="validateRepeat(this.value)" onpaste="return false;" placeholder='Escriba su email otra vez. No puede copiar y pegar.' required/>
					{!! Form::label('Ciudad') !!}
					{!! Form::text('city', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su ciudad')) !!}
					{!! Form::label('Compañia') !!}
					{!! Form::text('group', null, 
						array('required', 
							  'class'=>'form-control', 
							  'placeholder'=>'Escriba su compañia u organizacion')) !!}
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
					{!! Form::submit('Enviar', 
					  array('class'=>'btn btn-primary')) !!}
				</div>
				{!! Form::close() !!}

		</div>
    </div>
</div>

      <!-- FOOTER -->
<?php include('template/footer.html'); ?>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="api/bootstrap.min.js"></script>
  </body>
</html>
