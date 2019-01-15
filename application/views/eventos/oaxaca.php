<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eventos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Eventos" />
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
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<?php $this->load->view('menu');?>

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

	
        <div id="fh5co-contact" class="fh5co-section animate-box" style="padding: 4em 0 0 0 !important;">
		<div class="container">
			<div class="row animate-box">
                            <div class="col-md-8 fh5co-heading animate-box" style="margin-bottom:20px !important;">
                                    <h2>Caravana Autónoma de los Pueblos del sur</h2>
                                    <p>De diciembre 2018 a Enero 2019</p>
                                    <!--p>Lugar: Auditorio del SME. Av. Antonio Caso 45, Col. Tabacalera (cerca del metro revolución)</p-->
                            </div>
			</div>			
		</div>
        </div> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 animate-box">
                            <div class=""> 
                                <br>
                                    <p>Después de recorrer 7mil kilométros en 25 días realizando trabajos comunitarios en salud, medio ambiente, defensa del territorio, economía social comunitaria los equipos de trabajo de la 3ra y 4ta Caravana Autónoma de los Pueblos del Sur hemos regresado a la ciudad!. </p>
                                    <hr/>
                                    <p>Gracias a todos los que nos han escrito y han estado pendientes de nosotrxs. <br> Un abrazo a lxs compañerxs con los que nos solidarizamos y a quienes nos acogieron en sus espacios    </p>
                                    <hr/>
                                    <p>Seguimos realizando trabajos de organización desde abajo, desde la izquierda por la autonomía, contra el capitalismo y por la defensa del territorio.</p>
                                    <hr/>
                                    <p>Los trabajos continuan, estén pendientes...</p>
                                    <hr/>
                            </div>
                    </div>
                </div>            
                
                <div class="row">
                                <br>
                               <?php 
                                    //leer de la carpeta oaxaca y visualizar aqui
                                    foreach($map as $file){
                                ?>
                                    <div class="col-md-3 col-sm-6 col-xs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item">
                                        <img src="<?php echo base_url();?>/images/oaxaca/<?=$file?>" class="img-responsive" alt="">
                                    </div>
                                    </div>
                                <?php
                                    }
                                ?>
				

			</div>
            </div>

	<!--div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading animate-box">
					<h2>Testimony</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis.</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
						<img src="images/person_1.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
					<blockquote>
						<p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
						<p class="author"><cite>&mdash; Jane Smith</cite></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Book a Table</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
					<p><a href="mailto:info@yourdomainname.com" class="btn btn-primary btn-outline">Contact Us</a></p>
				</div>
			</div>
		</div>
	</div-->

		<?php $this->load->view('footer');?>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
		<?php $this->load->view('scripts');?>


	<script>
		Zoomerang
      .config({
        maxHeight: 600,
        maxWidth: 900,
        bgColor: '#000',
        bgOpacity: .85
      })
      .listen('[data-trigger="zoomerang"]')
	</script>

	</body>
</html>

