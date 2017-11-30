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

        <style>
            .colorpanel{
                color: black;
            }
        </style>
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

	
        <div id="fh5co-contact" class="fh5co-section animate-box" style="padding: 7em 0 0 0 !important;">
            <div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 fh5co-heading animate-box" style="margin-bottom:50px !important;">
                                <h2>Informes de Brigadas: Tierra y Libertad</h2>
                        </div>
                    </div>
            </div>
        </div>

        <div class="panel-group container" id="accordion">
            <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 col-md-9">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Brigada 1</a>
                    </h4>
                    </div>
                    <div class="col-xs-3 col-md-3 panel-title">                    
                    <span style="text-align:right;">15 de septiembre de 2017</span>
                    </div>
                </div>
            </div>
              <div id="collapse1" class="panel-collapse collapse in">
                <div class="panel-body colorpanel">
                    En conjunto con la Brigada Autónoma Interuniversitaria "Construyendo la esperanza" rumbo al Istmo de Tehuantepec.
                    <br>
                    <a href="<?php echo base_url()?>informes/informe1_brigada1.pdf">Ver informe 1</a>
                    <br>
                    <a href="<?php echo base_url()?>informes/informe2_brigada1.pdf">Ver informe 2</a>                
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 col-md-9">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Brigada 2</a>
                    </h4>
                    </div>
                    <div class="col-xs-3 col-md-3 panel-title">                    
                    <span style="text-align:right;">19, 20 y 21 de septiembre de 2017</span>
                    </div>
                </div>
              </div>
              <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body colorpanel">
                    Brigada de trabajo en la Ciudad de México, en la Unidad Habitacional Tlalpan, en la esquina de Chimalpopoca y Bolívar.
                    <br>
                    Acopio y ayuda en las labores de rescate y remoción de escombro.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 col-md-9">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Brigada 3 "Tierra y libertad"</a>
                    </h4>
                    </div>
                    <div class="col-xs-3 col-md-3 panel-title">                    
                    <span style="text-align:right;">21 al 24 de septiembre de 2017</span>
                    </div>
                </div>
              </div>
              <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body colorpanel">
                    Brigada de trabajo voluntario en los pueblos del Oriente de Morelos.
                    <br>
                    <a href="<?php echo base_url()?>informes/informe1_brigada3.pdf">Ver informe</a>
                </div>
              </div>
            </div>
            <!--4 brigada-->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 col-md-9">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Brigada 4</a>
                    </h4>
                    </div>
                    <div class="col-xs-3 col-md-3 panel-title">                    
                    <span style="text-align:right;">29 de septiembre de 2017</span>
                    </div>
                </div>
              </div>
              <div id="collapse4" class="panel-collapse collapse">
                <div class="panel-body colorpanel">
                    Cuarta brigada Autónoma Tierra y libertad.
                    <br>
                    <a href="<?php echo base_url()?>informes/informe1_brigada4.pdf">Ver informe</a>
                </div>
              </div>
            </div>
            <!--5 brigada-->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 col-md-9">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Brigada 5 Autónoma Tierra y libertad</a>
                    </h4>
                    </div>
                    <div class="col-xs-3 col-md-3 panel-title">                    
                    <span style="text-align:right;">11 de octubre de 2017</span>
                    </div>
                </div>
              </div>
              <div id="collapse5" class="panel-collapse collapse">
                <div class="panel-body colorpanel">
                    Quinta brigada Autónoma Tierra y libertad.
                    <br>
                    <a href="<?php echo base_url()?>informes/informe1_brigada5.pdf">Ver informe</a>
                </div>
              </div>
            </div>
            <!--6 brigada-->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 col-md-9">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Brigada 6 Autónoma Tierra y libertad</a>
                    </h4>
                    </div>
                    <div class="col-xs-3 col-md-3 panel-title">                    
                    <span style="text-align:right;">20-22 De octubre de 2017</span>
                    </div>
                </div>
              </div>
              <div id="collapse6" class="panel-collapse collapse">
                <div class="panel-body colorpanel">
                    Quebrantadero Morelos<br>
                    Festival Cultural por la Reconstrucción de la Vida.<br>
                    Apoyos generales 10 compañeros, brigada de estudiantes de arquitectura para valoración y muestreo, colaboración con la creación de un video documental.
                </div>
              </div>
            </div>
            <!--7 brigada-->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 col-md-9">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Brigada 7 Autónoma Tierra y libertad</a>
                    </h4>
                    </div>
                    <div class="col-xs-3 col-md-3 panel-title">                    
                    <span style="text-align:right;">13-19 de Noviembre de 2017</span>
                    </div>
                </div>
              </div>
              <div id="collapse7" class="panel-collapse collapse">
                <div class="panel-body colorpanel">
                    Trabajos a realizar:
                    Salud
                    Cultura
                    Reconstrucción
                    Acopio
                </div>
              </div>
            </div>
            <!--7 brigada-->
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9 col-md-9">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Brigada 8 Autónoma Tierra y libertad</a>
                    </h4>
                    </div>
                    <div class="col-xs-3 col-md-3 panel-title">                    
                    <span style="text-align:right;">30 Noviembre al 9 de Diciembre</span>
                    </div>
                </div>
              </div>
              <div id="collapse8" class="panel-collapse collapse">
                <div class="panel-body colorpanel">
                    Istmo de Tehuantepec- Costa y Sierra Sur.
                </div>
              </div>
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

