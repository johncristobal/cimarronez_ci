<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>cimarronez</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="C.A.C.A.O." />
	<meta name="keywords" content="cacao, chocolate, montañas, lenguas, semillas" />
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      a{
          color: white !important;
      }
  </style>
	</head>
	<body style="background: rgb(136, 62, 7)">
		
	<!--div class="fh5co-loader"></div-->

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
            <div class="row">
                <br>
            </div>
            <div class="row">
            <!--h2>Carousel Example</h2-->  
            <div class="col-md-3 text-center"></div>
            <div class="col-md-6 col-sm-6 centered text-center">
                <h1 class="" style="color:#fff;">Iniciar sesión Admin</h1>
                <br>
                <form method="post" action="<?php echo base_url()?>admin/inicio">
                        <div class="form-bg-1 ui-widget"><input type="email" name="name_1" id="name_1" class="form-control" placeholder="Correo"></div>
                        <?php echo form_error('name_1'); ?>

                    <br>
                        <div class="form-bg-1 ui-widget"><input type="password" name="name_2" id="name_2" class="form-control" placeholder="Password"></div>
                        <?php echo form_error('name_2'); ?>
                    <br>
                    <input type="submit" class="button" value="Ingresar" style="color:#000;">
                </form>
            </div>
            <div class="col-md-3 text-center"></div>

            </div>
                <div class="row">
                <br>
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

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
        <?php $this->load->view('scripts');?>

        
        <script src="https://www.gstatic.com/firebasejs/5.2.0/firebase.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-database.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-firestore.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-messaging.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase-functions.js"></script>
        <script src="<?php echo base_url()?>js/firebaseScript.js">          
        </script>

	</body>
</html>

