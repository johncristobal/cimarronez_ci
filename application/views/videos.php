<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Galeria</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Galeria" />
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

        <script>
            $(function() {
              $(".video").click(function () {
                var theModal = $(this).data("target"),
                videoSRC = $(this).attr("data-video"),
                videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
                $(theModal + ' iframe').attr('src', videoSRCauto);
                $(theModal + ' button.close').click(function () {
                  $(theModal + ' iframe').attr('src', videoSRC);
                });
              });
            });
        </script>
        <style>
            .space-top{
                margin-top: 40px;
            }
        </style>
	</head>
	<body>
		
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

        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <iframe width="100%" height="350" src="" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
        </div>
            
	<div id="fh5co-gallery" class="fh5co-section">
		<div class="container">
			<div class="row">
                            <div class="col-md-12 fh5co-heading animate-box" style="margin-bottom: 90px;">
                                <h2>Galeria de videos</h2>
                                <div class="row">
                                        <div class="col-md-6">
                                                <p>Observa nuestra galeria de videos.</p>
                                        </div>
                                </div>
                            </div>

                            <div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 text-center">
                                    <div class="">
                                        <!--iframe src="https://www.youtube.com/embed/dzozOuvNEhw" frameborder="0" allowfullscreen="allowfullscreen" style="height: 100%;"></iframe-->
                                        <img src="<?php echo base_url();?>images/back3.jpg" alt="" width="170px" height="170px">
                                    </div>
				</div>
                                <div class="col-md-3 col-sm-3 col-xs-12 text-center space-top">
                                    <!--iframe src="https://www.youtube.com/embed/dzozOuvNEhw" frameborder="0" allowfullscreen="allowfullscreen" style="height: 100%;"></iframe-->
                                    <span>7º Aniversario - Zapoteco Yalala</span>
				</div>
           			<div class="col-md-6 col-sm-6 col-xs-12 text-center space-top">
                                    <!--iframe src="https://www.youtube.com/embed/dzozOuvNEhw" frameborder="0" allowfullscreen="allowfullscreen" style="height: 100%;"></iframe-->
                                    <button class="btn btn-danger btn-lg video" data-video="https://www.youtube.com/watch?v=xbAy2JYyY-E" data-toggle="modal" data-target="#videoModal">Reproducir Video</button>
				</div>
                            </div>
                            
				<!--div class="col-md-6 col-sm-6 fh5co-gallery_item">
                                    <div class="fh5co-bg-img fh5co-gallery_big" data-trigger="zoomerang">
                                        <iframe src="https://www.youtube.com/embed/_Ku4Hub5gQI" frameborder="0" allowfullscreen="allowfullscreen" style="height: 100%; width: 100%"></iframe>
                                    </div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
                                    <div class="fh5co-bg-img" data-trigger="zoomerang">
                                        <iframe src="https://www.youtube.com/embed/UT__Oa8YnEU" frameborder="0" allowfullscreen="allowfullscreen" style="height: 100%;"></iframe>
                                    </div>
                                    <div class="fh5co-bg-img" data-trigger="zoomerang">
                                        <iframe src="https://www.youtube.com/embed/GHX6jCX6ibg" frameborder="0" allowfullscreen="allowfullscreen" style="height: 100%;"></iframe>
                                    </div>
				</div-->

				<!--div class="col-md-3 col-sm-3 fh5co-gallery_item">
                                    <div class="fh5co-bg-img" data-trigger="zoomerang">
                                        <iframe src="https://www.youtube.com/embed/9j4TSM5V6UE" frameborder="0" allowfullscreen="allowfullscreen" style="height: 100%;"></iframe>
                                    </div>
				</div-->
				<!--div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_7.jpeg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_8.jpeg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery_9.jpeg);" data-trigger="zoomerang"></div>
				</div>

				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_1.jpeg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_2.jpeg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery_8.jpeg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_4.jpeg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_5.jpeg);" data-trigger="zoomerang"></div>
				</div>

				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_5.jpeg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_6.jpeg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-3 col-sm-3 fh5co-gallery_item">
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_7.jpeg);" data-trigger="zoomerang"></div>
					<div class="fh5co-bg-img" style="background-image: url(images/gallery_8.jpeg);" data-trigger="zoomerang"></div>
				</div>
				<div class="col-md-6 col-sm-6 fh5co-gallery_item">
					<div class="fh5co-bg-img fh5co-gallery_big" style="background-image: url(images/gallery_9.jpeg);" data-trigger="zoomerang"></div>
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

