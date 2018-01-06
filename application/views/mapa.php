<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nosotros</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Mapa de lenguas y semillas en Oaxaca" />
	<meta name="keywords" content="cacao, oaxaca, mixe, zapoteco, huave" />
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
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      
      #info-box {
        /*background-color: white;
        border: 1px solid black;
        bottom: 30px;
        height: 20px;
        padding: 10px;
        position: absolute;
        left: 30px;*/
      }
    </style>
	</head>
	<body oncopy="return false" oncut="return false" onpaste="return false">
		
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

	<div id="fh5co-about" class="fh5co-section">
		<div class="container">
			<div class="row">
                            <div class="col-md-8 img-wrap animate-box">
                                <div id="map" style="height: -webkit-fill-available;"></div>
                            </div>				
                            <div class="col-md-4">
                               <h2 id="lugar" style="color:white;"></h2>
                               <h3 style="color:white;">Cacao: <span id="cacao" style="font-size:18px; font-style: italic;"></span></h3>                                   
                            </div>
			</div>
		</div>
	</div>

	<!--div id="fh5co-featured-testimony" class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 fh5co-heading">
					<h2>Testimony</h2>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis.</p>
						</div>
					</div>
				</div>

				<div class="col-md-5 animate-box img-to-responsive">
						<img src="images/person_1.jpg" alt="">
				</div>
				<div class="col-md-7 animate-box">
					<blockquote>
						<p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
						<p class="author"><cite>&mdash; Jane Smith</cite></p>
					</blockquote>
				</div>
			</div>
		</div>
	</div-->

	
	<!--div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
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
	
        <script>
    var map;
    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        zoom: 7,
        center: {lat: 17.109028, lng: -96.719564}
      });

      // Load GeoJSON.
      map.data.loadGeoJson('<?php echo base_url();?>js/map.geojson');

      // Add some style.
      map.data.setStyle(function(feature) {
        return /** @type {google.maps.Data.StyleOptions} */({
          fillColor: feature.getProperty('color'),
          strokeWeight: 1
        });
      });

      // Set mouseover event for each feature.
      map.data.addListener('click', function(event) {
        document.getElementById('lugar').textContent =
            event.feature.getProperty('pueblo');
        document.getElementById('cacao').textContent =
            event.feature.getProperty('cacao');
      });

      // Set mouseover event for each feature.
      map.data.addListener('mouseover', function(event) {
        document.getElementById('lugar').textContent =
            event.feature.getProperty('pueblo');
        document.getElementById('cacao').textContent =
            event.feature.getProperty('cacao');
      });
    }
  </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB90BUuYggm4ZpunLxo_slY52Zc5n-ySw&callback=initMap">
    </script>
    
	<!-- jQuery -->
	<?php $this->load->view('scripts');?>
	

        
	</body>
</html>

