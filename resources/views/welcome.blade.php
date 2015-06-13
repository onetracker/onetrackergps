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
    <title>OneTracker GPS</title>

	<meta name="description" content="Servicios de localizacion en tiempo real" />
	<meta name="keywords" content="onetracker,onetrackergps,one,tracker,gps,localizacion,ubicacion,monitoreo,satelital,vehiculos,maquinaria,amarilla,transporte,control,familiar" />
    <meta property='og:title' content="OneTrackerGPS" /> <!-- facebook -->
    <meta property='og:description' content="Servicios de localización en tiempo real" />
    <meta property='og:type' content='website' />
    <meta property='og:url' content='http://onetrackergps.co' />
	<meta property="og:site_name" content="Onetracker - Servicios de localización en tiempo real">    

	<script type="text/javascript">
	
		var dispositivo = navigator.userAgent.toLowerCase();	
		//alert(dispositivo);
		if( dispositivo.search(/iphone|ipod|ipad|android/) > -1 ) {
		
			document.location = "http://mobile.onetrackergps.co";
		}
	</script>
	

  </head>

<!-- NAVBAR
================================================== -->
  <body>

  	<?php include_once("analyticstracking.php") ?>
  	<?php include('template/menu.html'); ?>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
      <div class="item active">
          <img src="img/satelite.jpg" alt="first slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>GPS Rastreo satelital.</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/maquinaris.jpg" style="max-width:100%;" width="2000" height="1000" alt="first-slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Maquinaria Amarilla</h1>
              <p><a class="btn btn-lg btn-primary" href="maquinaria-amarilla" role="button">Ver más</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/bicicleta.jpg" width="1721" height="968" alt="third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Localizadores GPS para bicicletas.</h1>
              <p><a class="btn btn-lg btn-primary" href="gps-en-movimiento" role="button">Ver más</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"><img src="img/left-arrow.png" width="30" height="30" alt="arrow"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"><img src="img/right-arrow.png" width="30" height="30" alt="arrow"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">

		<?php

			foreach( $posts as $post ) {
			
				if ( $post->post_title == "Características de la plataforma" && $post->post_status == "publish" ) {
		?>			
					<div class="col-lg-12" align="center">
					  <img src="img/transport-icon.png" width="80" height="98" alt="">
					  <h2><?php echo $post->post_title; ?></h2>
					  <p><?php echo implode(' ', array_slice(explode(' ', $post->post_content), 0, 24)) . "..."; ?></p>
					  <p><a class="btn btn-default" href="<?php echo $post->guid; ?>" role="button">Leer más &raquo;</a></p>
					</div><!-- /.col-lg-4 -->
		<?php
				} else {}
			}
		?>			

      </div><!-- /.row -->


      <hr class="featurette-divider">



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
