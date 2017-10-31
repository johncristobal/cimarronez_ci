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
                                    <h1 style="color: white;">Comunícate con nosotros.</h1>
					<p>Contáctanos para obtener más información acerca de nuestros productos.</p>
                                        <p>Correo: chocolatecimarron@gmail.com</p>
                                        <p>Facebook: Cooperativa Autónoma Cimarronez</p>
                                        <!--p><a href="whatsapp://send?phone=525536733317">WhatsApp</a>: 55 36 73 33 17</p-->
                                        <p>WhatsApp: 55 36 73 33 17</p>
                                        <p>Youtube: Paliacatv</p>
                                        <p>Twitter: @cimarronezcacao</p>
                                        <!--p>Instagram: </p-->
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

        <footer id="fh5co-footer" role="contentinfo" class="fh5co-section" style="background-color: rgba(0,0,0,0.5);">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h4>C.A.C.A.O.</h4>
					<p>COOPERATIVA AUTÓNOMA CIMARRONEZ ANTICAPITALISMO ORGANIZADO</p>
				</div>
				<div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Links</h4>
					<ul class="fh5co-footer-links">
						<li><a href="<?php echo base_url();?>">Inicio</a></li>
                                                <li><a href="<?php echo base_url();?>nosotros">Nuestros orígenes</a></li>
                                                <li><a href="<?php echo base_url();?>nosotros/rumbos">Nuestros rumbos</a></li>
						<li><a href="<?php echo base_url();?>contacto">Contáctanos</a></li>
						<li><a href="gallery.html">Videos</a></li>
					</ul>
				</div>

				<!--div class="col-md-2 col-md-push-1 fh5co-widget">
					<h4>Categories</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Landing Page</a></li>
						<li><a href="#">Real Estate</a></li>
						<li><a href="#">Personal</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">e-Commerce</a></li>
					</ul>
				</div-->

				<!--div class="col-md-4 col-md-push-1 fh5co-widget">
					<h4>Contact Information</h4>
					<ul class="fh5co-footer-links">
						<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
						<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
						<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
						<li><a href="http://https://freehtml5.co">freehtml5.co</a></li>
					</ul>
				</div-->

			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<!--p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p-->
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter2"></i></a></li>
							<li><a href="#"><i class="icon-facebook2"></i></a></li>
							<li><a href="#"><i class="icon-linkedin2"></i></a></li>
							<li><a href="#"><i class="icon-dribbble2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<?php $this->load->view('scripts');?>

	</body>
</html>

