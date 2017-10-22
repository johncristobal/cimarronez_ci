<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contáctanos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Contacto" />
	<meta name="author" content="cimarronez" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

        <?php $this->load->view('head');?>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

        <style type="text/css">
            @media screen and (max-width: 768px){
                .fh5co-cover{
                    padding: 3em 0;
                    height: 120px;
                }
                }
        </style>
	</head>
	<body>
		
	<!--div class="fh5co-loader"></div-->
	
	<div id="page">
	<?php 
            $this->load->view('menu');
        ?>

	<header id="fh5co-header" class="fh5co-cover " role="banner" style="background: #3b1e07;" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t" style="height: 100px">
						<div class="display-tc animate-box" data-animate-effect="fadeIn" style="height: 100px">
                                                    
                                                    <!--img src="images/facepage.png" alt="">
                                                    <!--h1>Cooperativa Autónoma Cimarronez</h1-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
	<div id="fh5co-contact" class="fh5co-section animate-box">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-5">
                                    <h1 style="color: white;">Comunicate con nosotros.</h1>
					<p>Contáctanos para obtener más información acerca de nuestros productos.</p>
					<p><a href="mailto:info@yourdomainname.com" class="btn btn-primary btn-outline">Enviar correo</a></p>
				</div>
			
                                <div class="col-md-2"></div>
				<div class="col-md-5">
					<form action="#" id="form-wrap">
						<div class="row form-group">
							<div class="col-md-12">
								<label for="name">Nombre</label>
								<input type="text" class="form-control" id="name">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Correo</label>
								<input type="text" class="form-control" id="email">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Mensaje</label>
								<textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Enviar">
							</div>
						</div>

					</form>
				</div>
                        </div>

		</div>
	</div>

	<?php $this->load->view('footer');?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<?php $this->load->view('scripts');?>

	</body>
</html>

