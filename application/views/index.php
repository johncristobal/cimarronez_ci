<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>cimarronez</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body style="background: rgb(136, 62, 7)">
		
	<!--div class="fh5co-loader"></div-->
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap" style="background: rgba(0,0,0,0.5);">
                                            <div id="fh5co-logo"><a href="<?php echo base_url();?>">CIMARRONEZ<img src="<?php echo base_url();?>images/red.png" alt="" width="25" height="25"></a></div>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap" style="background: rgba(0,0,0,0.5);">
					<br>
						<ul>
							<!--li class="active"><a href="index.html">Home</a></li-->
							<!--li><a href="">C.A.C.A.O.</a></li-->
							<li class="has-dropdown">
								<a href="">C.A.C.A.O.</a>
								<ul class="dropdown">
									<li><a href="<?php echo base_url();?>nosotros">Nuestros orígenes</a></li>
									<li><a href="<?php echo base_url();?>nosotros/rumbos">Nuestros rumbos</a></li>
								</ul>
							</li>
							<!--li><a href="reservation.html">KAKAW AL XOCOLATL</a></li-->
							<!--li><a href="about.html">CACAO Y SALUD</a></li-->
							<!--li><a href="<?php echo base_url();?>nosotros">NOSOTROS</a></li-->
                                                        <li class="has-dropdown">
                                                            <a href="<?php echo base_url();?>productos">PRODUCTOS</a>
                                                            <ul class="dropdown">
                                                                <li>
                                                                    <a href="<?php echo base_url();?>productos/chocolate">Chocolate</a>
                                                                </li>
                                                                <li><a href="<?php echo base_url();?>productos/mezcal">Mezcal</a></li>
                                                                <li><a href="<?php echo base_url();?>productos/avellana">Avellana</a></li>
                                                                <li><a href="<?php echo base_url();?>productos/cacahuate">Cacahuate</a></li>
                                                                <li><a href="<?php echo base_url();?>productos/almendra">Almendra</a></li>
                                                                <li><a href="<?php echo base_url();?>productos/nuez">Nuez</a></li>
                                                                <li><a href="<?php echo base_url();?>productos">Más...</a></li>
                                                            </ul>
							</li>							
                                                        <li><a href="<?php echo base_url();?>eventos">EVENTOS</a></li>
                                                        <li><a href="<?php echo base_url();?>nosotros/videos">VIDEOS</a></li>
							<li><a href="<?php echo base_url();?>contacto">CONTÁCTANOS</a></li>
						</ul>
					</div>
					<div class="col-xs-12 text-center menu-1 menu-wrap">
					</div>
					<!--div class="col-xs-12 text-center" style="background: rgba(0,0,0,0.5);">
						texto
					</div-->
				</div>
			</div>
		<!-- </div> -->
	</nav>

	<!--header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(<?php echo base_url();?>images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<h1>The Best Coffee <em>&amp;</em> Restaurant <em>in</em> Brooklyn</h1>
							<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header-->
	
	<!--header class="fh5co-cover js-fullheight" role="banner" -->
	<div class="container">
  <!--h2>Carousel Example</h2-->  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" id="carrus">
      <div class="item">
        <img src="<?php echo base_url();?>images/cartel1.png" alt="" style="width:100%;">
      </div>
      <div class="item active">
        <img src="<?php echo base_url();?>images/cartel2.png" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url();?>images/back1.jpg" alt="" style="width:100%;">
      </div>
      <div class="item">
        <img src="<?php echo base_url();?>images/back3.jpg" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!--/header-->

	<!--div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-pull-4 img-wrap animate-box" data-animate-effect="fadeInLeft">
					<img src="<?php echo base_url();?>images/hero_1.jpeg" alt="">
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					<div class="section-heading">
						<h2>The Restaurant</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae neque quisquam at deserunt ab praesentium architecto tempore saepe animi voluptatem molestias, eveniet aut laudantium alias, laboriosam excepturi, et numquam? Atque tempore iure tenetur perspiciatis, aliquam, asperiores aut odio accusamus, unde libero dignissimos quod aliquid neque et illo vero nesciunt. Sunt!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam iure reprehenderit nihil nobis laboriosam beatae assumenda tempore, magni ducimus abentey.</p>
						<p><a href="#" class="btn btn-primary btn-outline">Our History</a></p>
					</div>
				</div>
			</div>
		</div>
	</div-->

        <!--Content-->
	<div id="fh5co-featured-menu" class="fh5co-section">
		<div class="container">
			<div class="row">
                            <div class="col-md-12 fh5co-heading animate-box" style="margin-bottom: 50px;">
					<h2>Productos</h2>
					<div class="row">
						<div class="col-md-6">
							<p>A continuación verás algunos de nuestros productos como cacao, mezcal, entre otros.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item">
                                        <a href="<?php echo base_url();?>productos/mezcal">
                                        <img src="<?php echo base_url();?>images/mezcal.png" class="img-responsive" alt="" style="height: 175px;">
                                        <h3>Mezcal</h3>
                                        <p>La palabra mezcal se deriva de los vocablos náhuatl metl e ixcalli, que significan...</p>
                                        </a>
                                        <span class="bounce">10 / 10 / 2017</span>                                                
                                    </div>
				</div>
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item  margin_top">
                                        <a href="<?php echo base_url();?>productos/avellana">
                                        <img src="<?php echo base_url();?>images/avellana.jpg" class="img-responsive" alt="">
                                        <h3>Avellana</h3>
                                        <p>Las avellanas, como todos los vegetales, no tienen colesterol.</p>
                                        </a>
                                        <span class="bounce">18 / 11 / 2016</span>                                                
                                    </div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item">
                                        <a href="<?php echo base_url();?>productos/cacahuate">
                                        <img src="<?php echo base_url();?>images/cacahuate1.jpg" class="img-responsive" alt="">
                                        <h3>Cacahuate</h3>
                                        <p>Los manís o cacahuetes son alimentos naturales con propiedades alimentarias ampliamente reconocidas.</p>
                                        </a>
                                        <span class="bounce">18 / 11 / 2016</span>                                                
                                    </div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item margin_top">
                                        <a href="<?php echo base_url();?>productos/almendra">
                                        <img src="<?php echo base_url();?>images/almendra1.jpg" class="img-responsive" alt="">
                                        <h3>Almendra</h3>
                                        <p>La almendra tiene un elevado valor nutritivo....</p>
                                        </a>
                                        <span class="bounce">18 / 11 / 2016</span>                                                
                                    </div>
				</div>

                                <!--div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item">
                                        <img src="<?php echo base_url();?>images/gallery_9.jpeg" class="img-responsive" alt="">
                                        <h3>Productos Cimarronez</h3>
                                        <p>Listado de productos Cimarronez.</p>
                                        <span class="bounce">Fecha</span>                                                
                                    </div>
				</div>
                                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item  margin_top">
                                        <img src="<?php echo base_url();?>images/gallery_9.jpeg" class="img-responsive" alt="">
                                        <h3>Guía de colores y sabores</h3>
                                        <p>Tablillas de Chocolate Cimarronez con: Sólo Cacao Nuez Almendra Cacahuate  Avellana Amaranto.</p>
                                        <span class="bounce">Fecha</span>                                                
                                    </div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item">
                                        <img src="<?php echo base_url();?>images/gallery_9.jpeg" class="img-responsive" alt="">
                                        <h3>Nuestros rumbos…</h3>
                                        <p>Listado de productos Cimarronez.</p>
                                        <span class="bounce">Fecha</span>                                                
                                    </div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
                                    <div class="fh5co-item margin_top">
                                        <img src="<?php echo base_url();?>images/gallery_9.jpeg" class="img-responsive" alt="">
                                        <h3>COOPERATIVA AUTÓNOMA CIMARRONEZ ANTICAPITALISMO ORGANIZADO</h3>
                                        <p>De dónde venimos… Desde hace cinco años, es decir a partir del….</p>
                                        <span class="bounce">Fecha</span>                                                
                                    </div>
				</div-->
				<!--div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="<?php echo base_url();?>images/gallery_8.jpeg" class="img-responsive" alt="">
						<h3>Salted Fried Chicken</h3>
						<span class="fh5co-price">$19<sup>.00</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="clearfix visible-sm-block visible-xs-block"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item">
						<img src="<?php echo base_url();?>images/gallery_7.jpeg" class="img-responsive" alt="">
						<h3>Italian Sauce Mushroom</h3>
						<span class="fh5co-price">$17<sup>.99</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-wrap animate-box">
					<div class="fh5co-item margin_top">
						<img src="<?php echo base_url();?>images/gallery_6.jpeg" class="img-responsive" alt="">
						<h3>Fried Potato w/ Garlic</h3>
						<span class="fh5co-price">$22<sup>.50</sup></span>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nihil cupiditate ut vero alias quaerat inventore molestias vel suscipit explicabo.</p>
					</div>
				</div-->
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
						<img src="<?php echo base_url();?>images/person_1.jpg" alt="">
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

	<div id="fh5co-slider" class="fh5co-section animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="fh5co-heading">
						<h2>Our Best <em>&amp;</em> Unique Menu</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis!</p>
					</div>
				</div>
				<div class="col-md-6 col-md-push-1 animate-box">
					<aside id="fh5co-slider-wrwap">
					<div class="flexslider">
						<ul class="slides">
					   	<li style="background-image: url(<?php echo base_url();?>images/gallery_7.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Crab <em>with</em> Curry Sources</h2>
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt eveniet quae, numquam magnam doloribus eligendi ratione rem, consequatur quos natus voluptates est totam magni! Nobis a temporibus, ipsum repudiandae dolorum.</p>
													<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(<?php echo base_url();?>images/gallery_6.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Tuna <em>&amp;</em> Roast Beef</h2>
													<p>Ink is a free html5 bootstrap and a multi-purpose template perfect for any type of websites. A combination of a minimal and modern design template. The features are big slider on homepage, smooth animation, product listing and many more</p>
													<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>
					   	<li style="background-image: url(<?php echo base_url();?>images/gallery_5.jpeg);">
					   		<div class="overlay-gradient"></div>
					   		<div class="container-fluid">
					   			<div class="row">
						   			<div class="col-md-12 col-md-offset-0 col-md-pull-10 slider-text slider-text-bg">
						   				<div class="slider-text-inner">
						   					<div class="desc">
													<h2>Egg <em>with</em> Mushroom</h2>
													<p>Ink is a free html5 bootstrap and a multi-purpose template perfect for any type of websites. A combination of a minimal and modern design template. The features are big slider on homepage, smooth animation, product listing and many more</p>
													<p><a href="#" class="btn btn-primary btn-outline">Learn More</a></p>
						   					</div>
						   				</div>
						   			</div>
						   		</div>
					   		</div>
					   	</li>		   	
					  	</ul>
				  	</div>
				</aside>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog" class="fh5co-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h2>Events</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, consequatur. Aliquam quaerat pariatur repellendus veniam nemo, saepe, culpa eius aspernatur cumque suscipit quae nobis illo tempora. Eum veniam necessitatibus, blanditiis facilis quidem dolore! Dolorem, molestiae.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(<?php echo base_url();?>images/gallery_1.jpeg);"></a>
						<div class="blog-text">
							<span class="posted_on">Feb. 15th 2016</span>
							<h3><a href="#">Photoshoot On The Street</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>1.2K</li>
								<li><i class="icon-eye2"></i>2K</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(<?php echo base_url();?>images/gallery_2.jpeg);"></a>
						<div class="blog-text">
							<span class="posted_on">Feb. 15th 2016</span>
							<h3><a href="#">Surfing at Philippines</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>1.2K</li>
								<li><i class="icon-eye2"></i>2K</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(<?php echo base_url();?>images/gallery_3.jpeg);"></a>
						<div class="blog-text">
							<span class="posted_on">Feb. 15th 2016</span>
							<h3><a href="#">Focus On Uderwater</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>1.2K</li>
								<li><i class="icon-eye2"></i>2K</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div-->
	
	<!--div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(<?php echo base_url();?>images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Book a Table</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
					<p><a href="reservation.html" class="btn btn-primary btn-outline">Book Now</a></p>
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


	</body>
</html>

